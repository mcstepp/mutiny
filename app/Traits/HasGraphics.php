<?php

namespace App\Traits;

//use App\Models\Activity;

trait HasGraphics
{
    protected static function bootHasGraphics()
    {

    }


    public function graphics()
    {
        return $this->morphOne('App\Models\Graphics', 'owner');
    }

}