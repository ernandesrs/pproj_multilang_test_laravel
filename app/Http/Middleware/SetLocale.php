<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        $locale = strtolower($request->segment(1));
        if (!in_array($locale, config("app.allowed_locales")))
            return redirect(app()->getLocale());

        if (!file_exists(resource_path("lang/{$locale}")))
            return redirect(app()->getLocale());

        app()->setLocale($locale);

        return $next($request);
    }
}
