<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded =[];

    public function path()
    {
        return $this->id;
    }

    public function slug()
    {
    	$word = nl2br($this->body);

    	$truncated = Str::limit($word, 60);

    	return $truncated;
    }
}
