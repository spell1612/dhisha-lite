<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\donor;

class bdonoController extends Controller
{
  //
    public function __construct()
    {
      $this->middleware('auth', ['only' => ['donoradmin','donordel']]);
    }

    public function snd(Request $bg){

      if($bg->bgroup=="..." && $bg->bgloc=="...")
        return view('donorlist',['bloodlist'=>donor::orderBy('bloodgroup','asc')->get()]);
      else
      if($bg->bgroup=="...")
        return view('donorlist',['bloodlist'=>donor::where('place','=',$bg->bgloc)->orderBy('bloodgroup','ASC')->get()]);
      else
      if($bg->bgloc=="...")
        return view('donorlist',['bloodlist'=>donor::where('bloodgroup','=',$bg->bgroup)->orderBy('place','ASC')->get()]);
      else

      $bgvar=donor::where('bloodgroup','=',$bg->bgroup)->where('place','=',$bg->bgloc)->orderBy('name','ASC')->get();

      return view('donorlist',['bloodlist'=>$bgvar]);
    }

    public function sndadmin()
    {
      $var=donor::all();
      return view('donorlist',['bloodlist'=>$var]);
    }

    public function snddel($id)
    {
      $var=donor::find($id);
      $var->delete();
      // putfeeb();
      return back();
    }
}
