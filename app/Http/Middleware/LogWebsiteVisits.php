<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LogWebsiteVisits
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->isStarted()) {
            $request->session()->start();
        }

        // Debug: Log session data before checking
        Log::info('Session data before checking last visit:', $request->session()->all());

        if ($request->is('/')) {
            $lastVisit = $request->session()->get('last_visit_home');

            // Debug: Log the last visit time
            Log::info('Last visit time:', ['last_visit_home' => $lastVisit]);

            if (!$lastVisit || now()->diffInMinutes($lastVisit) >= 15) {
                DB::table('website_visits')->insert([
                    'url' => $request->url(),
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->header('User-Agent'),
                    'visited_at' => now()
                ]);

                $request->session()->put('last_visit_home', now());

                // Debug: Log session data after updating
                Log::info('Session data after updating last visit:', $request->session()->all());
            } else {
                // Debug: Log when visit is not logged
                Log::info('Visit not logged as it is within 15 minutes of the last visit.');
            }
        }

        return $next($request);
    }
}
