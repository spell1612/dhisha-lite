<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\fback;

class fbdispController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function putfeeb()
    {
      $fbvar=fback::all();
      // if($fbvar->count()==0)
      //   return view('feedback',['fbv'=>0]);
      return view('feedback',['fbv'=>$fbvar]);
    }

    public function delfeeb($abc)
    {
      $fb=fback::find($abc);
      $fb->delete();
      // putfeeb();
      return back();
    }



}
