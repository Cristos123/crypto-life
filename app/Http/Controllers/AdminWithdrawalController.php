<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;

class AdminWithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdrawals = Withdrawal::paginate(25)->sortByDesc('created_at');
        return view('withdrawal.admin.index', compact('withdrawals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  Withdrawal $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrawal $withdrawal)
    {
        return view('withdrawal.admin.show', compact(['withdrawal']));
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
    public function update(Request $request, Withdrawal $withdrawal)
    {
        if ($request->approved) {
            if ($withdrawal->status == 'pending') {
                $withdrawal->status = 'succeed';

                $withdrawal->save();
            }
        } elseif ($request->cancel) {
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
