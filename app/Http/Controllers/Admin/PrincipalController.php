<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;
use App\Principal;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class PrincipalController extends Controller
{
    use ImageUpload;

    public function edit(Principal $principal)
    {
    	return view('dashboard.speech.principal.edit', compact('principal'));
    }

    public function update(Request $request, Principal $principal)
    {
    	$attributes = request()->validate([
    		'body' => 'required',
    	]);

    	if ($request->hasFile('avatar')) {
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            if ($principal->avatar != null) {
                $publicId = json_decode($principal->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar', '370', 455));
            
            $attributes['avatar'] = json_encode($results);
        }
    	
    	$principal->update($attributes);

    	request()->session()->flash('message', 'Speech updated successfully!');
    	return back();
    }
}
