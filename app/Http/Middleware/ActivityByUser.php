<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Models\User;

class ActivityByUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if (Auth::check()){
        $expiresAt = Carbon::now();
        Cache::put('user-is-online-'.Auth::user()->id, true, $expiresAt);
        User::where('id', Auth::user()->id)->update(['last_seen' => (new \DateTime())->format("Y-m-d H-i-s")]);
       }
       return $next($request);
    }
}
