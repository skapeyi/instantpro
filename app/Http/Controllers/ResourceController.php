<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;
use App\Prorequest;

class ResourceController extends Controller
{
    public function get_users(){
    	return Datatables::of(User::where(['deleted' => 0]))
    	->orderby('id','DESC')
    	->addColumn('edit', function($user){ 
    		return '<a title="Edit" href ="/admin/users/'.$user->id.'/edit"><i class = "fa fa-pencil"></i></a>';})
    	->make(true);
    }

    public function get_prorequests(){
    	return Datatables::of(Prorequest::where(['deleted' => 0]))
    	->orderBy('id','DESC')
    	->addColumn('edit', function($request){ 
    		return '<a href="/admin/prorequests/'.$request->id.'/edit"><i class="fa fa-pencil"></i></a>';})
    	->make(true);
    }
}
