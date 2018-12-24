<?php

namespace App\Models\Character;

use App\Notifications\CharacterWasAccepted;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Character extends PendingCharacter implements Auditable
{
    use Cachable;
    use HasSlug;
    use \OwenIt\Auditing\Auditable;


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

        static::created(function($character) {
            PendingCharacter::where([
                'user_id' => $character->user_id,
                'first_name' => $character->first_name,
                'chosen_name' => $character->chosen_name,
                'last_name' => $character->last_name,
                'ic_birth_day' => $character->ic_birth_day,
                'ic_birth_month' => $character->ic_birth_month,
                'ic_birth_year' => $character->ic_birth_year
            ])->delete();

            $character->user->notify(new CharacterWasAccepted($character));
        });

    }

    public function getRouteKeyName()
    {
        return 'slug';
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
        $key = $this->getRouteKeyName();
        return "/c/" . $this[$key];
    }

     public function activity()
    {
        return $this->morphMany('App\Models\Activity', 'author');
    }

}
