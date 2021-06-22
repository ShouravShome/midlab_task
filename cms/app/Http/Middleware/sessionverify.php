<?php

namespace App\Http\Middleware;

use Closure;

class sessionverify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('useremail')){
				return $next($request);
		} 
		else
		{	
			$request->session()->flash('msg2', 'Please login');
			return redirect('/login');
		}
    }
}
