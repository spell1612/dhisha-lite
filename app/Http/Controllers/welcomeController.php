<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\pic;

class welcomeController extends Controller
{
    //
    public function show()
    {
      $im=pic::all();
      return view('dhishome',['img'=>$im]);
    }
}
