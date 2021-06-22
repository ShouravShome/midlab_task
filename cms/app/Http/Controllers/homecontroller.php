<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
        public function index(Request $req){
		//echo "This is home page";
		//return view ('home.index')->with('id', '123');
		//return view ('home.index')->withId('123')->withName('shome');
		//return view ('home.index', ['id'=>1234, 'name'=>'shome']);
		
		//$id = '12345';
		$email = $req->session()->get('useremail');
		$type = $req->session()->get('usertype');
		return view('home.index', compact('email','type'));			
	}
	public function verify(Request $req){
		//dd($req); debug;
		//echo"Username is: ".$req->uname. " & Password is: ".$req->password;
		//return redirect ('/logout');
	}
}
