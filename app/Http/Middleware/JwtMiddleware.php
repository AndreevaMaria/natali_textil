<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class JwtMiddleware extends BaseMiddleware
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
        try {
            $user = JWTAuth::parseToken()->authentificate();
        } catch {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return responce()->json(['error' => true, 'message' => 'Token invalid']);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return responce()->json(['error' => true, 'message' => 'Token expired']);
            } else {
                return responce()->json(['error' => true, 'message' => 'Token not found']);
            }
        }
        return $next($request);
    }
}
