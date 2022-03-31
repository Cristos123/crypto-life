<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Duration;
use App\Models\Payout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        $investments = $user->investments()->with(['category', 'asset', 'duration'])->active()->get();

        // Calculate the next raise for each investment the invesment
        foreach ($investments as $investment) {
            $lastUpdate = Carbon::parse($investment->updated_at);
            $startDate = Carbon::parse($investment->created_at);
            $today = Carbon::today();
            $rate = $investment->rate;
            $accrueDays = $investment->accrueDays();


            // Update should only happen if:
                // it has not been updated for the day OR
                // it has not been updated for the last day
            if (!$investment->updateCompleted() and !$investment->dailyInvestmentCalculated()) {
                // return "All Hell";
                // If $investment is the last day
                if ($accrueDays >= ($investment->duration->duration)) {

                    // Use the actual rate
                    $validRate = (100 + $rate) / 100;

                    // Make Payout to the user by:
                        // updating status to completed
                        // And making payout
                    $investment->status = 'completed';
                    $makePayout = true;

                } else if ($accrueDays >= ($investment->duration->duration - 5)) {

                    // Generate a random rate from the (5%) to rate.
                    $validRate = (100 + random_int(5, $rate)) / 100;

                } else {

                    // Generate a random rate from the (-rate) to rate.
                    $validRate = (100 + random_int(-$rate, $rate)) / 100;

                }

                $newAmount = $investment->amount * $validRate;

                $investment->last_total = $newAmount;
                $investment->save();

                if (isset($makePayout) and $makePayout) {
                    // Make Payout to user
                    $user->credit($newAmount);

                    // Create Payout for the user
                    $payout = Payout::create([
                        'user_id' => $user->id,
                        'reference' => 'PAY-'.Str::random(10),
                        'amount' => $newAmount,
                        'balance' => $user->balance(),
                    ]);
                }
            }
        }

        // return $user->investments;
        $allInvestments = $user->investments()->with(['category', 'asset', 'duration'])->take(15)->get();

        $durations = Duration::all();
        $assets = Asset::all();
        $categories = Category::all();

        return  view('user.dashboard', compact('investments', 'allInvestments', 'user', 'durations', 'assets', 'categories'));
    }
}
