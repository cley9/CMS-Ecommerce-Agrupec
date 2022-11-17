<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificationAdmin
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
        if (session()->exists('email') && session()->get('rol') === '4') {
            // if (session()->exists('name') && session()->get('rol') === '4') {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
