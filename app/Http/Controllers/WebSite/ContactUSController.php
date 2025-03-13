<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    public function index()
    {
        return view('website.contact');
    }
}