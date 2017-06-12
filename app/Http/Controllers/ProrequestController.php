<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prorequest;
use Auth;

class ProrequestController extends Controller
{
    public function requestPro(){
    	return view('prorequest.create');
    }

    public function saveProrequest(Request $request){
    	if(Auth::check()){
    		$user_id = Auth::user()->id;

    		$pro_request = new Prorequest();
    		$pro_request->description = $request->description;
    		$pro_request->user_id = $user_id;
    		$pro_request->email = Auth::user()->email;
    		$pro_request->when_needed = $request->when_needed;
    		$pro_request->status = "New";

    		if($pro_request->save()){
    			flash()->success('Your request has been saved! We will contact you soon!');
    			return redirect('/request-a-pro');
    		}else{
    			flash()->error("Something went wrong, please try again later!");
    			return redirect('/request-a-pro');
    		}

    	}
    	else{
    		//create new account if user isn't registered on the platform.
    		flash()->error('Please Create an account to continue!');
    		return redirect('/register');
    	}
    }
}
