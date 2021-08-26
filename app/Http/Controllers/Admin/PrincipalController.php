<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Principal;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class PrincipalController extends Controller
{
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
            if ($principal->avatar != null) {
                $publicId = json_decode($principal->avatar)->public_id;
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
    	
    	$principal->update($attributes);

    	request()->session()->flash('message', 'Speech updated successfully!');
    	return back();
    }
}
