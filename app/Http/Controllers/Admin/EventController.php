<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        
        return view('dashboard.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'avatar'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['date'] = request()->input('date');
        $attributes['time'] = request()->input('time');

         if ($request->hasFile('avatar')) {
            Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality"=>"auto:best", 
                                            "fetch_format"=>"auto"
                                        ));
            $cloundary_upload = Cloudder::getResult();
            $results = [
                'public_id' => $cloundary_upload['public_id'],
                'url' => $cloundary_upload['url'],
                'secure_url' => $cloundary_upload['secure_url'],
                'format' => $cloundary_upload['format'],
                'bytes' => $cloundary_upload['bytes'],
            ];

            $attributes['avatar'] = json_encode($results);
        }

        Event::create($attributes);

        request()->session()->flash('message', 'New event was added successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
                Cloudder::delete($publicId, array());
            }

            Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality"=>"auto:best", 
                                            "fetch_format"=>"auto"
                                        ));
            $cloundary_upload = Cloudder::getResult();
            $results = [
                'public_id' => $cloundary_upload['public_id'],
                'url' => $cloundary_upload['url'],
                'secure_url' => $cloundary_upload['secure_url'],
                'format' => $cloundary_upload['format'],
                'bytes' => $cloundary_upload['bytes'],
            ];

            $attributes['avatar'] = json_encode($results);
        }

        $event->update($attributes);

        request()->session()->flash('message', 'The information was updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return back();
    }
}
