<?php

namespace App\Http\Controllers\Admin;

use App\Coordinator;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class CoordinatorController extends Controller
{
    use ImageUpload;

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
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            if ($coordinator->avatar != null) {
                $publicId = json_decode($coordinator->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar'), 370, 455);
            
            $attributes['avatar'] = json_encode($results);
        }

    	$coordinator->update($attributes);

    	request()->session()->flash('message', 'Speech updated successfully!');
    	return back();
    }
}
