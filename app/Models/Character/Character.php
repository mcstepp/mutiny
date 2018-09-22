<?php

namespace App\Models\Character;

use App\Models\Character\PendingCharacter;

class Character extends PendingCharacter
{

    protected $table = 'characters';

    /**
     * Override mass assignment protection
     *
     * @var array
     */
    protected $guarded = []; 
    protected $with = ['faction'];


    public function threads()
    {
        return $this->morphMany('App\Models\Forum\Thread', 'author');
    }

    public function posts()
    {
        return $this->morphMany('App\Models\Forum\Post', 'author');

    }

    public function path() 
    {
        return "/c/{$this->id}";
    }

     public function activity()
    {
        return $this->morphMany('App\Models\Activity', 'author');
    }

}
