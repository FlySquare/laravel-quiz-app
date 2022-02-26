<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Index extends Controller
{
    public function index(){
        return view('index');
    }
    public function logout(){
        Session::flush();
        return redirect(route('login'));
    }
}
