<?php

namespace App\Http\Middleware;

use App\Models\users;
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
        if(!in_array($request->getRequestUri(),$exceptPages)){
            if(!$request->session()->has('user_username')){
                Session::flush();
                return redirect(route('login'));
            }else{
                $currentUser = users::where('username','=',$request->session()->get('user_username'))->first();
                if($currentUser == null){
                    Session::flush();
                    return redirect(route('login'));
                }else{
                    $request['currentUser'] = $currentUser;
                    return $next($request);
                }
            }
        }else{
            if($request->session()->has('user_username')){
                return redirect(route('index'));
            }else{
                return $next($request);
            }
        }
    }
}
