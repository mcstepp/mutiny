<?php

namespace App\Traits;

trait CanAuthorThreads
{
    protected static function bootCanAuthorThreads()
    {

    }

    public function threads()
    {
        return $this->morphMany('App\Models\Forum\Thread', 'author');
    }

    public function posts()
    {
        return $this->morphMany('App\Models\Forum\Post', 'author');
    }

    public function activities()
    {
        return $this->morphMany('App\Models\Activity', 'author');
    }

}