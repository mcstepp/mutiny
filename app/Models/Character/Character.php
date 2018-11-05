<?php

namespace App\Models\Character;

use App\Models\Character\PendingCharacter;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Character extends PendingCharacter
{
    use Cachable;

    protected $table = 'characters';

    /**
     * Override mass assignment protection
     *
     * @var array
     */
    protected $guarded = []; 
    protected $with = ['faction'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('posts_count', function($builder){
            $builder->withCount('posts');
        });

    }


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
