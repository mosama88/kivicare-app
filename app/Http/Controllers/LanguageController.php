<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        if (in_array($lang, ['en', 'ar'])) {
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
}
