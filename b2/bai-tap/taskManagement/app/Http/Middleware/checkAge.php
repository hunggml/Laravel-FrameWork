<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age = Carbon::parse($request->birthDay)->age;
        if ($age < 18) {
            return redirect()->route('register.register');
        }

        return $next($request);
    }
}
