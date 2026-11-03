<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Switch the active application language and redirect back.
     */
    public function switch(Request $request, string $locale): RedirectResponse
    {
        $supportedLocales = config('app.supported_locales', ['id', 'en']);

        if (in_array($locale, $supportedLocales, true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}

