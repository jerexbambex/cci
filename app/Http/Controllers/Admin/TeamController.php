<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageUpload;

class TeamController extends Controller
{
    use ImageUpload;
    
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index', compact('teams'));
    }

    public function create()
    {
        return view('dashboard.team.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'title' => 'required',
            'description' =>'required',
            'role' =>'required',
            'email' => 'required | email | unique:teams',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['title'] = request()->input('title');
        $attributes['role'] = request()->input('role');
        $attributes['email'] = request()->input('email');
        $attributes['description'] = request()->input('description');
        $attributes['facebook'] = request()->input('facebook');
        $attributes['twitter'] = request()->input('twitter');
        $attributes['instagram'] = request()->input('instagram');
        $attributes['linkedin'] = request()->input('linkedin');

        if ($request->hasFile('avatar')) {
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            $results = $this->imageUpload($request->file('avatar'), 370, 455);

            $attributes['avatar'] = json_encode($results);
        }

        Team::create($attributes);

        request()->session()->flash('message', 'New member was added successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Team $team)
    {
        return view('dashboard.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        request()->validate([
            'name' => 'required',
            'title' => 'required',
            'description' =>'required',
            'role' =>'required',
            'email' => 'required | email',
        ]);

        $attributes['name'] = request()->input('name');
        $attributes['title'] = request()->input('title');
        $attributes['role'] = request()->input('role');
        $attributes['email'] = request()->input('email');
        $attributes['description'] = request()->input('description');
        $attributes['facebook'] = request()->input('facebook');
        $attributes['twitter'] = request()->input('twitter');
        $attributes['instagram'] = request()->input('instagram');
        $attributes['linkedin'] = request()->input('linkedin');

        if ($request->hasFile('avatar')) {
            request()->validate(['avatar'=> 'mimes:jpeg,bmp,jpg,png|between:1, 6000']);

            if ($team->avatar != null) {
                $publicId = json_decode($team->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload($request->file('avatar'), 370, 455);

            $attributes['avatar'] = json_encode($results);
        }

        $team->update($attributes);

        request()->session()->flash('message', 'Team member was updated successfully!');
        return back();
    }

    public function destroy(Team $team)
    {
        if ($team->avatar != null) {
            $publicId = json_decode($team->avatar)->public_id;
            $this->imageDelete($publicId);
        }
        
        $team->delete();

        return back();
    }
}
