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
        $deposits = Deposit::paginate(25)->sortByDesc('created_at');
        return view('admin.deposits.index', compact('deposits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Deposit $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $deposit)
    {
        $message = "No action performed";

        if ($request->approved) {
            if ($deposit->status == 'pending') {
                DB::beginTransaction();

                try {
                    $deposit->status = 'succeed';

                    $deposit->save();


                    // Credit the users wallet
                    $amount = $deposit->amount;
                    $user = $deposit->user;

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
            if ($deposit->status == 'pending') {
                $deposit->status = 'closed';

                $deposit->save();

                $message = "Deposit cancelled!";
            }
        }
        return back()->with('success', $message);
    }
}
