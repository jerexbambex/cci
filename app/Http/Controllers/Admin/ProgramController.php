<?php

namespace App\Http\Controllers\Admin;

use App\Program;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;

class ProgramController extends Controller
{
    use ImageUpload;
 
    public function index()
    {
        $programs = Program::all();

        return view('dashboard.program.index', compact('programs'));
    }

    public function create()
    {
        return view('dashboard.program.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required | unique:programs',
            'description' =>'required',
            'body' =>'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['body'] = request()->input('body');

        if ($request->hasFile('avatar')) {
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            $results = $this->imageUpload($request->file('avatar'));
            
            $attributes['avatar'] = json_encode($results);
        }



        Program::create($attributes);

        request()->session()->flash('message', 'The new program was added successfully!');
        return back();
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('dashboard.program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        request()->validate([
            'name' => 'required',
            'description' =>'required',
            'body' =>'required',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['description'] = request()->input('description');
        $attributes['body'] = request()->input('body');

        if ($request->hasFile('avatar')) {
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            if ($program->avatar != null) {
                $publicId = json_decode($program->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $program->update($attributes);

        request()->session()->flash('message', 'The program was updated successfully!');
        return back();
    }

    public function destroy(Program $program)
    {
        if ($program->avatar != null) {
            $publicId = json_decode($program->avatar)->public_id;
            $this->imageDelete($publicId);
        }
        
        $program->delete();

        return back();
    }
}
