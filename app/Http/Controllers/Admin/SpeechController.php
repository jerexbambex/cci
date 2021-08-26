<?php

namespace App\Http\Controllers\Admin;

use App\Director;
use App\Principal;
use App\Coordinator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeechController extends Controller
{
    public function index()
    {
        $director = Director::first();
        $principal = Principal::first();
        $coordinator = Coordinator::first();

        return view('dashboard.speech.index', compact('director', 'principal', 'coordinator'));
    }
}
