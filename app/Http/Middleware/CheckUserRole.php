<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = auth()->user();

        if ($user && in_array($user->role, ['admin'])) {
            return redirect(route('admin.dashboard'));

        }elseif ($user && $user->role === 'staff') {
            return redirect(route('staff.dashboard'));
        } elseif ($user && $user->role === 'customer') {
            return redirect(route('customer.dashboard'));
        } else {
            return redirect(route('home'));
        }

        return $next($request);
    }
}
