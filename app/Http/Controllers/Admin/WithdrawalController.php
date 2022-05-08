<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdrawal;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdrawals = Withdrawal::pending()->with(['user'])->paginate(25)->sortByDesc('created_at');

        return view('admin.withdrawals.index', compact('withdrawals'));
    }

    public function show(Withdrawal $users_withdrawal)
    {
        $withdrawal = $withdrawal = $users_withdrawal;;

        return view('admin.withdrawals.show', compact(['withdrawal']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Withdrawal $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrawal $users_withdrawal)
    {
        $withdrawal = $users_withdrawal;
        if ($request->has('approve')) {
            if ($withdrawal->status == 'pending') {
                $withdrawal->status = 'succeed';

                $withdrawal->save();
            }
        } elseif ($request->has('cancel')) {
            if ($withdrawal->status == 'pending') {
                $withdrawal->status = 'closed';

                $withdrawal->save();
            }
        }
        return back()->with('success', 'Status updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
