<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    public function index(){
        return view('forgotPassword');
    }
}
