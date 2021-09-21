<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;

class TestimonialController extends Controller
{
    use ImageUpload;
    
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('dashboard.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('dashboard.testimonial.create');
    }
    
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
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            $results = $this->imageUpload($request->file('avatar'), 80, 80);
            
            $attributes['avatar'] = json_encode($results);
        }

        Testimonial::create($attributes);

        request()->session()->flash('message', 'New testimonial was added successfully!');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.testimonial.edit', compact('testimonial'));
    }

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
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            if ($testimonial->avatar != null) {
                $publicId = json_decode($testimonial->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar'), 80, 80);


            $attributes['avatar'] = json_encode($results);
        }

        $testimonial->update($attributes);

        request()->session()->flash('message', 'Testimonial was updated successfully!');
        return back();
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->avatar != null) {
            $publicId = json_decode($testimonial->avatar)->public_id;
            $this->imageDelete($publicId);
        }
        
        $testimonial->delete();

        return back();
    }
}
