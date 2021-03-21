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
    
}
