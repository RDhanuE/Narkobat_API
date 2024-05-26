<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Apotik;

class AuthApotik
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'No token provided'], 401);
        }

        $apotik = Apotik::where('token', $token)->first();

        if (!$apotik) {
            return response()->json(['message' => 'Invalid token'], 401);
        }

        // Store the authenticated apotik in the request
        $request->attributes->set('apotik', $apotik);

        return $next($request);
    }
}
