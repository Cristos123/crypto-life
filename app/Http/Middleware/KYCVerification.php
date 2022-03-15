<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class KYCVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $kyc = auth()->user()->kyc;
        if (is_null($kyc) || $kyc->status == 'pending') {
            // dd($kyc);

            return redirect()->route('kyc-verification');
        }

        return $next($request);
    }
}
