<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;

class EventController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $events = Event::all();
        
        return view('dashboard.event.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'date' =>'required',
            'time' => 'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['date'] = request()->input('date');
        $attributes['time'] = request()->input('time');

         if ($request->hasFile('avatar')) {
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);
            $results = $this->imageUpload($request->file('avatar'));
            
            $attributes['avatar'] = json_encode($results);
        }

        Event::create($attributes);

        request()->session()->flash('message', 'New event was added successfully!');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit(Event $event)
    {
        return view('dashboard.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
         request()->validate([
            'name' => 'required',
            'description' => 'required',
            'date' =>'required',
            'time' => 'required',
            'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['date'] = request()->input('date');
        $attributes['time'] = request()->input('time');

        if ($request->hasFile('avatar')) {
            if ($event->avatar != null) {
                $publicId = json_decode($event->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $event->update($attributes);

        request()->session()->flash('message', 'The information was updated successfully!');
        return back();
    }

    public function destroy(Event $event)
    {
        if ($event->avatar != null) {
            $publicId = json_decode($event->avatar)->public_id;
            $this->imageDelete($publicId);
        }
        
        $event->delete();

        return back();
    }
}
