<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $allInvestments = $user->investments()->with(['category', 'asset', 'duration'])->take(15)->get();

        return  view('user.dashboard', compact('investments', 'allInvestments', 'user'));
    }
}
