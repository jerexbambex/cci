<?php

namespace App\Http\Controllers\Admin;

use App\Director;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class DirectorController extends Controller
{
    public function edit(Director $director)
    {
    	return view('dashboard.speech.director.edit', compact('director'));
    }

    public function update(Request $request, Director $director)
    {
    	$attributes = request()->validate([
    		'body' => 'required',
    	]);

    	if ($request->hasFile('avatar')) {
            if ($director->avatar != null) {
                $publicId = json_decode($director->avatar)->public_id;
                Cloudder::delete($publicId, array());
            }

            Cloudder::upload($request->file('avatar'), null, 
                                        array(
                                            'folder' => 'cambridgecollege',
                                            "quality" => 'auto:best',
                                            'gravity' => 'face', 
                                            "fetch_format"=>"auto",
                                            'width' => 370,
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
    	
    	$director->update($attributes);

    	request()->session()->flash('message', 'Speech updated successfully!');
    	return back();
    }
}
