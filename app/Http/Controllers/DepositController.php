<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Str;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $deposits = $user->deposits;

        return view('user.deposit.index', compact('deposits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Asset::has('payment_address')->with(['default_address'])->get();
        // return $assets;
        return view('user.deposit.create', compact('assets'));
    }

    public function store(Request $request)
    {
        $inputs = $request->validate([
            'currency' => ['required', 'string'],
            'amount' => ['required', 'numeric', 'min:1']
        ]);

        $deposit = Deposit::create([
            ...$inputs,
            'reference' => Str::random(10),
        ]);
        $deposit->user_id = auth()->id();

        return back()->with('success', 'You account balance will be updated once your deposit is verified.');
    }

    public function destroy(Deposit $deposit)
    {
        $deposit->status = 'cancelled';
        $deposit->save();

        return back()->with('success', 'Deposit cancelled successfully!');
    }
}
