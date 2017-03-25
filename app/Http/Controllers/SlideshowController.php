<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Slideshow;

class SlideshowController extends Controller
{
    public function listSlideshows(){
    	$slideshow = Slideshow::all();
    	return view('admin.slideshow',array('slideshow' => $slideshow, "title"=>"Slide Show"));
    }
}
