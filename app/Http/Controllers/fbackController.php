<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\fback;

class fbackController extends Controller
{
    //
    public function getfeeb(Request $feeb){
      $fb= new fback;
        $fb->name=$feeb->fbname;
        $fb->email=$feeb->fbemail;
        $fb->matter=$feeb->fbmatter;
        $fb->save();
        return back();
    }

}
