<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    //
      /*====Suppliers=============================*/
  
      public function index()
      {
          return view('site.suppliers');
      }
}
