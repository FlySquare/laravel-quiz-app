<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Register extends Controller
{
    public function index(){
        return view('register');
    }

    public function registerPost(Request $request){
        $validator = Validator::make($request->all(),[
           'name' =>'required|unique:users,username',
           'email' =>'required|email|unique:users,email',
           'password1' =>'required',
           'password2' =>'required|same:password1',
        ]);
        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
        $user = new users();
        $user->email = $request->get('email');
        $user->username = $request->get('name');
        $user->password = md5($request->get('password1'));
        if ($user->save()) {
            return redirect('login')->with(['message' => 'Registration Successful!']);
        } else {
            return redirect('register')->withErrors('An error occurred while registering!');
        }
    }
}
