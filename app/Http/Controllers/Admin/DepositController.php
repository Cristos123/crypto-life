<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposits = Deposit::with(['user'])->paginate(25)->sortByDesc('created_at');
        // return $deposits;
        return view('admin.deposits.index', compact('deposits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Deposit $usersDeposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $usersDeposit)
    {
        $message = "No action performed";


        if ($request->approved) {
            if ($usersDeposit->status == 'pending') {
                DB::beginTransaction();

                try {
                    $usersDeposit->status = 'approved';

                    $usersDeposit->save();


                    // Credit the users wallet
                    $amount = $usersDeposit->amount;
                    $user = $usersDeposit->user;

                    $user->credit($amount);
                } catch (Throwable $ex) {
                    DB::rollBack();
                    report($ex);

                    return back()->with('error', 'Could not perform action');
                }

                DB::commit();

                $message = "Deposit approved! User will  be automatically credited.";
            }
        } elseif ($request->cancel) {
            if ($usersDeposit->status == 'pending') {
                $usersDeposit->status = 'rejected';

                $usersDeposit->save();

                $message = "Deposit cancelled!";
            }
        }
        return back()->with('success', $message);
    }
}
