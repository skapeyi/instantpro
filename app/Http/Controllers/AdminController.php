<?php

namespace App\Http\Controllers;

use App\User;
use Datatables;
use App\Prorequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;


class AdminController extends Controller
{
	public function index(){
		return view('admin.users.all');
	}

	public function editUser($id){
		$user = User::find($id);
		return view('admin.users.edit', compact('user'));
	}

	public function updateUser(Request $request, $id){
		$user = User::find($id);
      	$user->deleted = $request->deleted;
      	$user->approved = $request->deleted;

      	if($user->save()){
        	flash()->success('Account updated');
        	return redirect('/admin/users');
      	}
      	else{
        	flash()->error('Something went wrong, try again later!');
      	}
	}

	public function proRequests(){
		return view('admin.pro.all');
	}

	public function editProrequest($id){
		$pro_req = Prorequest::find($id);
		$pros = DB::table('users')->where(['role' => 'Professional'])->pluck('name','id');
		return view('admin.pro.edit',compact('pro_req','pros'));
	}

	public function updateProrequest(Request $request, $id){
		Log::info($request);
		$pro_req = Prorequest::find($id);
		$pro_req->pro_id = $request->pro_id;
		$pro_req->deleted = $request->deleted;
		$pro_req->status = $request->status;

		if($pro_req->save()){
			flash()->success('The Pro request has been updated. The customer and professional will be alerted shortly!');
			return redirect('/admin/prorequests');
		}
		else{
			flash()->error('Something went wrong while processing your request, please try again later!');
		}
	}
}
