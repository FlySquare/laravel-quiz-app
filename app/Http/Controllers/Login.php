<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Login extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginPost(Request $request){
        $validator = Validator::make($request->all(),[
            'username' =>'required',
            'password' =>'required',
        ]);
        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }
        $user = users::where('username','=',$request->get('username'))->where('password','=',md5($request->get('password')))->first();
        if($user == null){
            return redirect('login')->withErrors('User is not exist!');
        }else{
            $request->session()->put('user_username',$user->username);
            return redirect('/')->with(['message' => 'Login Successful!']);
        }
    }
}
