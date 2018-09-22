<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Character;
use App\Models\Forum\Thread;
use App\Models\Forum\Post;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'alias'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        // static::addGlobalScope('posts_count', function($builder){
        //         $builder->withCount('posts');
        // });

    }

    public function threads()
    {
        return $this->morphMany('App\Models\Forum\Thread', 'author');
    }

    public function posts()
    {
        return $this->morphMany('App\Models\Forum\Post', 'author');
    }

    public function pending_characters()
    {
        return $this->hasMany(PendingCharacter::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function path() 
    {
        return "/u/{$this->id}";
    }

     public function activity()
    {
        return $this->morphMany('App\Models\Activity', 'author');
    }    
}
