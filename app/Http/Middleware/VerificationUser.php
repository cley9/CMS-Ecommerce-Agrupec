<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificationUser
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
        if (session()->exists('name') && session()->get('rol') === '0') {
        // if (session()->exists('name') && session()->get('rol') === '0') {
            return $next($request);

        } else {
            // return redirect('no-autorizado');
            return redirect('/');

            # code...
        }
    }
}
