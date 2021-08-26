<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Gallery;

class GalleryController extends Controller
{
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

    	Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality"=>"auto:best", 
                                            "fetch_format"=>"auto",
                                            'height' => 455,
                                            'crop' => 'fill'
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
            Cloudder::delete($publicId, array());

            Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality"=>"auto:best", 
                                            "fetch_format"=>"auto",
                                            'height' => 455,
                                            'crop' => 'fill'
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

        $gallery->update($attributes);

        request()->session()->flash('message', 'Gallery updated successfully!');
        return back();
    }
}
