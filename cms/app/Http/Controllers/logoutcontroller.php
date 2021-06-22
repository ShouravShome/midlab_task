<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function index(Request $req)
	{
		$req->session()->flush();
		$req->session()->flash('msg1', 'logged out');
		return redirect ('/login');
	}
}
