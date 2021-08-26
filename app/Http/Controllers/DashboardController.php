<?php

namespace App\Http\Controllers;

use App\Team;
use App\Event;
use App\Result;
use App\Program;
use App\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$events = Event::all();
    	$programs = Program::all();
    	$results = Result::all();
    	$teams = Team::all();
    	$testimonials = Testimonial::all();

    	return view('dashboard.index', compact('events', 'programs', 'results', 'teams', 'testimonials'));
    }
}
