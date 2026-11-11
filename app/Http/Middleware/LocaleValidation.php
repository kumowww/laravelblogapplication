<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleValidation
{
    protected array $validLocales = ['en', 'ru', 'de'];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        if ($locale === null) {
            return $next($request);
        }

        if (! in_array($locale, $this->validLocales, true)) {
            return redirect('/en');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
