<?php

namespace App\Http\Controllers;

use App\Gallery;
use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function canvas($id)
    {
        
        $new=Gallery::select('cat','title', 'image')->where('cat', '=', $id)->get();
        
        
       return view('canvas',compact('new'));
         
    }
    
}
