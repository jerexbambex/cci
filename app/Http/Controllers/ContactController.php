<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	return view('frontend.pages.contact');
    }

    public function store()
    {
    	$attributes = request()->validate([
    		'name' => 'required',
    		'email' => 'required | email',
    		'subject' => 'required',
    		'message' => 'required',
    	]);

    	Contact::create($attributes);

    	request()->session()->flash('message', 'Your message was sent successfully!');
        return back();
    }
}
