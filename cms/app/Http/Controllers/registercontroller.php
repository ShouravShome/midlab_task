<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerrequest;
use App\Login;

class registercontroller extends Controller
{
	public function index(){
		return view('register.index');
	}
    public function add(registerrequest  $req){
		
		$new_user=new Login;
		$new_user->username = $req->name;
		$new_user->useremail = $req->email;
		$new_user->password = $req->password;
		$new_user->usertype = $req->type;
		$new_user->save();
		return redirect('login');
	}
}
