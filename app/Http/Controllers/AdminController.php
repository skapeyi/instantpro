<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;

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

	public function editProrequest(){

	}

	public function updateProrequest(){

	}
}
