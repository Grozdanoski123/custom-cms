<?php

namespace App\Http\Middleware;

use Closure;
use function GuzzleHttp\Promise\all;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        $userRole = $request->user()->getRole;

        if(!$role === $userRole->name) {

            return redirect()->route('home');
        }

        return $next($request);
    }
}
