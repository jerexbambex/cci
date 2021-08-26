<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whyus extends Model
{
    public function path()
    {
    	return $this->id;
    }
}
