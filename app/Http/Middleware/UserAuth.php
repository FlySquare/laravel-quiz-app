<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $exceptPages = [
            '/login',
            '/loginPost',
            '/register',
            '/registerPost',
            '/forgotPassword',
            '/forgotPasswordPost'
        ];
        if (!$request->session()->has('user_logged') && !in_array($request->getRequestUri(), $exceptPages)) {
            return redirect(route('login'));
        } else {
            return $next($request);
        }
    }
}
