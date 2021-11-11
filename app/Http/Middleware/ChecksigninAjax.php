<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChecksigninAjax
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
        if ($request->ajax()) {
            $user = Session::get('user');

            if ($user != null) {
                return $next($request);
            } else {
                abort(500, "Sign in, please");
            }
        } else {
            abort(403);
        }
    }
}
