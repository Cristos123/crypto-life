<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $withdrawals = auth()->user()->withdrawals;
        // $withdrawals = Withdrawal::find(auth()->user()->id);
        $withdrawals = Withdrawal::where('user_id', auth()->user()->id)->get();
        // dd($withdrawals);
        // $withdrawals = Withdrawal::paginate(25);
        return view('withdrawal.index', compact('withdrawals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::all();
        $wallet = auth()->user()->wallet;
        // dd($wallets);
        return view(
            'withdrawal.account-withdraw',
            compact(['assets', 'wallet'])
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'balance' => ['required', 'max:255'],
            'amount' => ['required', 'string', 'max:255'],
            'withdrawal_address' => ['required', 'string', 'max:255'],
            'asset_id' => ['required', 'string'],
        ]);
        $amount = $request->amount;
        $asset_id = $request->asset_id;
        $user = auth()->user();

        $reference = Str::random(20);

        if (!$user->isSufficient($request->amount * 100)) {
            return back()->with(
                'error',
                'Your withdrawal cannot be completed because your  wallet is insufficient'
            );
        }

        $amount = $amount * 100;

        $user->debit($amount);
        $user->refresh();
        // $assetId = Asset::find($request->asset_id);
        $request->merge([
            'amount' => $amount,
            'balance' => $user->balance(),
            'asset_id' => $asset_id,
            'reference' => $reference,
        ]);
        $withdrawal = Withdrawal::create($request->all());
        $user->withdrawals()->save($withdrawal);

        return back()->with(
            'success',
            'You withdrawal request has been processed succesfully'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrawal $withdrawal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdrawal $withdrawal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrawal $withdrawal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdrawal  $withdrawal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdrawal $withdrawal)
    {
        //
    }
}
