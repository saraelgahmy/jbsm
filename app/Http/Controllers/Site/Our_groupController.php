<?php


namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Our_groupController extends Controller
{
    //
    public function index()
    {
        return view('site.our_group');
    }
}
