<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\donor;

class bdonoController extends Controller
{
    //
    public function snd(Request $bg){

      if($bg->bgroup=="..." && $bg->bgloc=="...")
        return view('donorlist',['bloodlist'=>donor::all()->orderby('bloodgroup','ASC')]);
      else
      if($bg->bgroup=="...")
        return view('donorlist',['bloodlist'=>donor::where('place','=',$bg->bgloc)->orderby('bloodgroup','ASC')->get()]);
      else
      if($bg->bgloc=="...")
        return view('donorlist',['bloodlist'=>donor::where('bloodgroup','=',$bg->bgroup)->orderby('place','ASC')->get()]);
      else

      $bgvar=donor::where('bloodgroup','=',$bg->bgroup)->where('place','=',$bg->bgloc)->orderby('name','ASC')->get();

      return view('donorlist',['bloodlist'=>$bgvar]);
    }
}
