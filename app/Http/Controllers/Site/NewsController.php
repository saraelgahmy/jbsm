<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('site.news');
    }
}
