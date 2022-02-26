<?php

namespace App\Http\Controllers;

use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    public function index(){
        return view('profile');
    }

    public function changePassword(){
        return view('changePassword');
    }

    public function changePasswordPost(Request $request){
        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'password1' => 'required',
            'password2' => 'required|same:password1'
        ]);
        if ($validator->fails()) {
            return redirect('changePassword')
                ->withErrors($validator)
                ->withInput();
        }
        $user = users::where('email','=',$request->get('currentUser')->email)
            ->where('password','=',md5($request->get('old_password')))
            ->first();
        if ($user == null){
            return redirect('changePassword')->withErrors('Please check old password!');
        }
        $user->password = md5($request->get('password1'));
        if ($user->save()) {
            return redirect('changePassword')->with(['message' => 'Your new password has been changed.']);
        } else {
            return redirect('changePassword')->withErrors('An error occurred while password changing!');
        }
    }
}
