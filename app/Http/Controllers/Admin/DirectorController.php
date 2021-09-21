<?php

namespace App\Http\Controllers\Admin;

use App\Director;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class DirectorController extends Controller
{
    use ImageUpload;

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
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            if ($director->avatar != null) {
                $publicId = json_decode($director->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar'), 370, 455);

            $attributes['avatar'] = json_encode($results);
        }
    	
    	$director->update($attributes);

    	request()->session()->flash('message', 'Speech updated successfully!');
    	return back();
    }
}
