<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
		//if(!isset($_GET['age']) || $_GET['age'] < 18){
				//return redirect()->route('home');
			//}
		dump($request);
        return $next($request);
    }
}
