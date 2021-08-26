<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function path()
    {
        return $this->id;
    }

    public function director()
    {
        return $this::where('role', 'Director'); 
    }
}
