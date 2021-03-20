<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function work()
    {
        return view('work');
    }
}
