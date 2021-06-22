<?php

namespace App\Http\Middleware;

use Closure;

class typeverify
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
        $type=$request->session()->get('type');
		if($type=="admin")
		{
					return $next($request);
		}
		else
			return redirect()->back();
    }
}
