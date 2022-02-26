<?php

namespace App\Http\Controllers;

use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPassword extends Controller
{
    public function index(){
        return view('forgotPassword');
    }

    public function forgotPasswordPost(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return redirect('forgotPassword')
                ->withErrors($validator)
                ->withInput();
        }
        $user = users::where('email','=',$request->get('email'))->first();
        if ($user == null){
            return redirect('forgotPassword')->withErrors('This email is not available in the database!');
        }
        $randomPassword = rand(100000,999999);
        $user->password = md5($randomPassword);
        $user->forgot_password_time = Carbon::now();
        if ($user->save()) {
            Mail::to($user->email)->send(new \App\Mail\ForgotPassword($randomPassword));
            return redirect('login')->with(['message' => 'Your new password has been sent to email.']);
        } else {
            return redirect('forgotPassword')->withErrors('An error occurred while email sending!');
        }
    }
}
