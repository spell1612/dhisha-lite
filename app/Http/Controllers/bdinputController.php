<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\donor;

class bdinputController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getbdono(Request $bdon)
    {
      $bd= new donor;
        $bd->name=$bdon->bdname;
        $bd->bloodgroup=$bdon->bdbg;
        $bd->place=$bdon->bdplace;
        $bd->phno=$bdon->bdphno;
        $bd->save();
        return back();
    }



}
