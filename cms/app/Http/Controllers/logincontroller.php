<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Login;
//use  Validator;

class logincontroller extends Controller
{
    public function index(){
		echo "This is login page";
		return view ('login.index');
		//echo "This is login page";
	}
	public function verify(UserRequest $req){
		$login = Login::where('useremail', $req->email)
		//dd($login);
					    ->where('password', $req->password)
					    ->first();		
		//$data = Login::where('username', $req->uname)
		               //->pluck('type')[0];
					   //dd('$result');		
		if(count((array)$login) > 0){
		//if($req->email==$req->password){
			echo "valid user";
			$req->session()->put('useremail', $login['useremail']);
			$req->session()->put('usertype', $login['usertype']);
			return redirect ('/home');
		}
		else
			//$req->session()->flash('msg', 'invalid user');
			//return redirect('/login');
			echo "invalid user";
	} 
}
