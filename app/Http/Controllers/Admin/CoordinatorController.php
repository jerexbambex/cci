<?php

namespace App\Http\Controllers\Admin;

use App\Coordinator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class CoordinatorController extends Controller
{
    public function edit(Coordinator $coordinator)
    {
    	return view('dashboard.speech.coordinator.edit', compact('coordinator'));
    }

    public function update(Request $request, Coordinator $coordinator)
    {
    	$attributes = request()->validate([
    		'body' => 'required',
    	]);

    	if ($request->hasFile('avatar')) {
            if ($coordinator->avatar != null) {
                $publicId = json_decode($coordinator->avatar)->public_id;
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

    	$coordinator->update($attributes);

    	request()->session()->flash('message', 'Speech updated successfully!');
    	return back();
    }
}
