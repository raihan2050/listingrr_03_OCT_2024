<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch the application language.
     *
     * @param  string  $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLanguage($lang)
    {
        if (in_array($lang, ['en', 'bn'])) {
            App::setLocale($lang);

            Session::put('applocale', $lang);
        }

        return redirect()->back();
    }
}
