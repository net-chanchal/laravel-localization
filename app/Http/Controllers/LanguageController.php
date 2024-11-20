<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * @param $lang
     * @return RedirectResponse
     */
    public function switchLang($lang): RedirectResponse
    {
        if (in_array($lang, ['en', 'bn'])) {
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
}
