<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Dhisha\fback;
use Illuminate\Support\Facades\Validator;

class fbackController extends Controller
{
    //
    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'fbname' => 'required|string|max:255',
            // 'fbemail' => 'required|string|email|max:255|unique:users',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    public function getfeeb(Request $feeb){
      $fb= new fback;
        $fb->name=$feeb->fbname;
        $fb->email=$feeb->fbemail;
        $fb->matter=$feeb->fbmatter;
        $fb->save();
        return back();
    }

}
