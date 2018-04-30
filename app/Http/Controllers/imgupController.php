<?php

namespace Dhisha\Http\Controllers;

use Illuminate\Http\Request;

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
    
    
        $image = $request->file('image');
        $input = 'image1.jpg';
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input);

        // $this->postImage->add($input);

        return back()->with('success','Image Upload successful')->with('image',$input);;
    }
    
}
