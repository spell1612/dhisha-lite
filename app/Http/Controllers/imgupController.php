<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Image;
use Dhisha\pic;

class imgupController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function imageUp(Request $request){

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('images/'. $filename);

            Image::make($image->getRealPath())->resize(470, 480)->save($path);
            $user= new pic;
            $user->filename = $filename;
            $user->save();

        return back()->with('success','Image Upload successful')->with('image',$filename);
    }

}
