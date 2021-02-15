<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     * @throws AuthenticationException
     */
    protected function redirectTo($request)
    {
        //request must expect a JSON response, characterised by its header: 
        
        if (!$request->expectsJson()) {
            throw new AuthenticationException;
        }
    }
}