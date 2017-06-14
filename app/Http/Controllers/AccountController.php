<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
    	return view('account.index');
    }

    public function myRequests(){
    	return view('account.myrequests');
    }

    public function updateProfile(){
    	return view('account.updateprofile');
    }

    public function changePassword(){
    	return view('account.changepassword');
    }
}
