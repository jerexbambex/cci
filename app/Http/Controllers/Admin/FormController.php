<?php

namespace App\Http\Controllers\Admin;

use App\Form;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class FormController extends Controller
{
    use ImageUpload;
    
    public function index()
    {
    	$forms = Form::all();

    	return view('dashboard.form.index', compact('forms'));
    }

    public function create()
    {
    	return view('dashboard.form.create');
    }

    public function store(Request $request)
    {
    	$attributes = request()->validate([
    		'name' => 'required'
    	]);

    	Form::create($attributes);

    	request()->session()->flash('message', 'File uploaded successfully!');
    	return redirect()->route('admin.form.index');
    }

    public function edit(Form $form)
    {
    	return view('dashboard.form.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
    	$attributes = request()->validate([
    		'name' => 'required',
    		'avatar' => 'mimes:pdf,docx,doc,',
    	]);

    	$attributes['name'] = request()->input('name');

    	if ($request->hasFile('avatar')) {
            if ($form->avatar != null) {
                $publicId = json_decode($form->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            Cloudder::upload($request->file('avatar'), null, array('folder' => 'cambridgecollege', "public_id" => "admission_form"));
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

        $form->update($attributes);

        request()->session()->flash('message', 'File updated successfully!');

        return redirect()->route('admin.form.index');
    }




}
