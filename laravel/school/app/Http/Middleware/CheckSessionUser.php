<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use App\Models\Notification;

class CheckSessionUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::get('role') !== 'user') {
            return redirect('/login')->with('fail', 'Unauthorized access! Please login as user.');
        }

        $notifications = Notification::query()
            ->select(DB::raw('COUNT(*) AS total_notifs'))
            ->where('user_id', '=', Session::get('user_id'))
            ->where('marked_seen', '=', '0')
            ->get()
            ->first();

        Session::put('notification_count', $notifications->total_notifs);

        return $next($request);
    }
}
