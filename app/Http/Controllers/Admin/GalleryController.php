<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Gallery;
use App\Http\Traits\ImageUpload;

class GalleryController extends Controller
{
    use ImageUpload;

    public function index()
    {
    	$sliders = Gallery::all();

        return view('dashboard.slider.index', compact('sliders'));
    }

    public function create()
    {
    	return view('dashboard.slider.create');
    }

    public function store(Request $request, Gallery $gallery)
    {
    	$attributes = $request->validate([
    		'title' => 'required',
    		'avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000',
    	]);

    	$attributes['title'] = request()->input('title');

        $results = $this->imageUpload($request->file('avatar'));

        $attributes['avatar'] = json_encode($results);

        Gallery::create($attributes);

        request()->session()->flash('message', 'Image uploaded successfully!');
        return back();
    }

    public function edit(Gallery $gallery)
    {
    	return view('dashboard.slider.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
    	request()->validate([
            'title' => 'required',
        ]);

        $attributes['title'] = request()->input('title');

    	if ($request->hasFile('avatar')) {
            $publicId = json_decode($gallery->avatar)->public_id;
            $this->imageDelete($publicId);

            $results = $this->imageUpload($request->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $gallery->update($attributes);

        request()->session()->flash('message', 'Gallery updated successfully!');
        return back();
    }

    public function destroy(Gallery $gallery)
    {
        $publicId = json_decode($gallery->avatar)->public_id;
        $this->imageDelete($publicId);

        $gallery->delete();

        request()->session()->flash('message', 'Record deleted successfully!');
        return back();
    }
}
