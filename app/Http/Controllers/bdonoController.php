<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\donor;

class bdonoController extends Controller
{
    //
    public function snd(Request $bg){
      if($bg->bgroup=="...")
       $bgvar=donor::all();
      else
       $bgvar=donor::where('bloodgroup','=',$bg->bgroup)->get();

      return view('donorlist',['bloodlist'=>$bgvar]);
    }
}
