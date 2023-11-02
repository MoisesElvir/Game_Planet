<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class imageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view("pages.imagess.image_list",array( "image"=>$images));
    }
}
