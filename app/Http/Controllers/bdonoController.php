<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\donor;

class bdonoController extends Controller
{
    //
    public function snd(Request $bg){
      
      if($bg->bgroup=="..." && $bg->bgloc=="...")
        return view('donorlist',['bloodlist'=>donor::all()]);

      if($bg->bgroup=="...")
        return view('donorlist',['bloodlist'=>donor::where('bloodgroup','=',$bg->bgroup)->get()]);

      if($bg->bgloc=="...")
        return view('donorlist',['bloodlist'=>donor::where('place','=',$bg->bgloc)->get()]);

      $bgvar=donor::where('bloodgroup','=',$bg->bgroup)->where('place','=',$bg->bgloc)->get();

      return view('donorlist',['bloodlist'=>$bgvar]);
    }
}
