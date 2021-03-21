<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function canvas($id)
    {
        $new=array();
        $new=Gallery::select('cat','title', 'image')
        ->where('cat', '=', $id)
        ->first();
        
        return view('canvas')->with('images',compact('new'));
    }
    public function typography()
    {
        return view('typography');
    }
    public function cartoon()
    {
        return view('cartoon');
    }
    public function portpencil()
    {
        return view('portpencilsketch');
    }
    public function colorpencil()
    {
        return view('colorpencilsketch');
    }
}
