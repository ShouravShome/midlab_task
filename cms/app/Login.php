<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
        protected $table = 'login';
	protected $primaryKey = 'userid';
	public $timestamps = false;
	
	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
