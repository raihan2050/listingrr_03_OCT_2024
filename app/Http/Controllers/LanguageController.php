<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    const SUPPORTED_LANGUAGES = ['en', 'bn'];

    /**
     * Switch the application language.
     *
     * @param  string  $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLanguage($lang)
    {
        if (in_array($lang, self::SUPPORTED_LANGUAGES)) {
            App::setLocale($lang);
            Session::put('applocale', $lang);
        } else {
            App::setLocale(config('app.fallback_locale'));
            Session::put('applocale', config('app.fallback_locale'));
        }
        // return Session::get('applocale')." - ".Config::get('app.locale');
        return redirect()->back();
    }
}
