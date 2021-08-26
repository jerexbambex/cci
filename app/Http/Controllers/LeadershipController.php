<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\Director;
use App\Principal;
use App\Team;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function index()
    {
    	$director = Director::first();
        $principal = Principal::first();
        $coordinator = Coordinator::first();
    	$teams = Team::all();

    	return view('frontend.pages.team.index', compact('teams', 'director', 'principal', 'coordinator'));
    }

    public function show(Team $leader)
    {
    	return view('frontend.pages.team.show', compact('leader'));
    }
}
