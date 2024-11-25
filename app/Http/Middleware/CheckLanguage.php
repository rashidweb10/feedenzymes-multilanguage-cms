<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        // Check if the request method is POST and 'language' matches currentSessionLanguage()
        if (($request->isMethod('post') || $request->isMethod('put')) && $request->input('language') !== languageSession()) {
            $response = [
                'status' => false,
                'notification' => 'Please reload the page & try again!',
            ];

            return response()->json($response);
        }

        return $next($request);
    }
}
