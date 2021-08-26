<?php

namespace App\Http\Controllers;

use App\About;
use App\Program;
use App\Gallery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$programs = Program::all();
    	$about = About::first();

    	return view('frontend.index', compact('programs', 'about'));
    }

    public function gallery()
    {
    	$images = Gallery::all();

    	return view('frontend.pages.gallery', compact('images'));
    }
}
