<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Duration;
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

        $durations = Duration::all();
        $assets = Asset::all();
        $categories = Category::all();

        return  view('user.dashboard', compact('investments', 'allInvestments', 'user', 'durations', 'assets', 'categories'));
    }
}
