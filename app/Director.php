<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return $this->id;
    }

    public function avatar()
    {
        if ($this->avatar == null) {
            return '/frontend/assets/images/team/team-member-01-370x455.jpg';
        }
        return json_decode($this->avatar)->secure_url;
    }
}
