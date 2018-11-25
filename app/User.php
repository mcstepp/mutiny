<?php

namespace App;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Character;
use App\Models\Forum\Thread;
use App\Models\Forum\Post;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class User extends Authenticatable
{
    use Notifiable, Cachable, HasSlug;

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

//         static::addGlobalScope('posts_count', function($builder){
//                 $builder->withCount('posts');
//         });

    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('username')
            ->saveSlugsTo('slug')
            ->usingSeparator('_');
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

    public function current_character()
    {
        return $this->characters()->where('current', '=', '1')->first();
    }

    public function path() 
    {
        $key = $this->getRouteKeyName();
        return "/u/". $this[$key];
    }

     public function activities()
    {
        return $this->morphMany('App\Models\Activity', 'author');
    }

    public function faction()
    {
        //return $this->role->name;
        return "Dauntless";
    }

    public function role()
    {
        return $this->belongsTo('App\Models\User\Role');
    }

    public function isSuperAdmin()
    {
        return $this->role->name === 'Super Admin';
    }

    public function isAdmin()
    {
        return $this->role->name === 'Admin';
    }

    public function isGlobalMod()
    {
        return $this->role->name === 'Global Moderator';
    }

    public function isSiteStaff()
    {
        return $this->isSuperAdmin() ||
            $this->isAdmin() ||
            $this->isGlobalMod();
    }

    public function isFullMember()
    {
        return $this->isSiteStaff() || $this->role->name === 'Member';
    }

    public function private_forums()
    {
        return $this->belongsToMany('App\Models\Forum\Forum', 'private_forum_users');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
