<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        // Check if the locale is valid or set the default to 'en'
        if (!in_array($locale, array_keys(getLanguageList()))) {
            $locale = 'en';
        }

        // Set the application locale and store it in the session
        App::setLocale($locale);
        //Session::put('lang', $locale);

        return $next($request);
    }
}
