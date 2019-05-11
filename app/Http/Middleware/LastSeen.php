<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class LastSeen
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
        if (!auth()->check()) {
            return $next($request);
        }

        $user = auth()->user();

        $user->update([
            'seen_at' => Carbon::now()->format("Y-m-d H:i:s")
        ]);

        return $next($request);
    }
}
