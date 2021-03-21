<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function canvas()
    {
        return view('canvas');
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
