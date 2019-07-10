<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthCtrl extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function dologin()
    {
    	
    }
}
