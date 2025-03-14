<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery'); // This will load the 'about' view from the resources/views directory
    }
}
