<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
    	$mails = Contact::latest()->get();

    	return view('dashboard.contact.index', compact('mails'));
    }

    public function show (Contact $contact)
    {
        // dd($contact);
    	$contact->status = 1;
    	$contact->update();


    	return view('dashboard.contact.show', compact('contact'));
    }

    public function destroy (Contact $contact)
    {
    	$contact->delete();

    	return redirect()->route('admin.inbox.index');
    }
}
