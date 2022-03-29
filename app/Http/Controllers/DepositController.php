<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Deposit;
use Illuminate\Http\Request;

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
        $assets = Asset::has('payment_address')->get();
        return Asset::all();
        return view('user.deposit.create', compact('assets'));
    }

    public function destroy(Deposit $deposit)
    {
        $deposit->status = 'cancelled';
        $deposit->save();

        return back()->with('success', 'Deposit cancelled successfully!');
    }
}
