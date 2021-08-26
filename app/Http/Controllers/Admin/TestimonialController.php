<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('dashboard.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes =  request()->validate([
            'name' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['title'] = request()->input('title');

        if ($request->hasFile('avatar')) {
            Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality" => 100,
                                            'gravity' => 'face', 
                                            "fetch_format"=>"auto",
                                            'width' => 80,
                                            'height' => 80,
                                            "radius"=>"max",
                                            'crop' => 'thumb'
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

        Testimonial::create($attributes);

        request()->session()->flash('message', 'New testimonial was added successfully!');
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
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $attributes =  request()->validate([
            'name' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['title'] = request()->input('title');

        if ($request->hasFile('avatar')) {
            if ($testimonial->avatar != null) {
                $publicId = json_decode($testimonial->avatar)->public_id;
                Cloudder::delete($publicId, array());
            }

            Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality" => 100,
                                            'gravity' => 'face', 
                                            "fetch_format"=>"auto",
                                            'width' => 80,
                                            'height' => 80,
                                            "radius"=>"max",
                                            'crop' => 'thumb'
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

        $testimonial->update($attributes);

        request()->session()->flash('message', 'Testimonial was updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
