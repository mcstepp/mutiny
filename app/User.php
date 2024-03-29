<?php

namespace App;

use App\Filters\UserFilters;
use App\Interfaces\IGraphics;
use App\Models\Forum\Category;
use App\Models\Invitation;
use App\Models\User\Role;
use App\Traits\CanAuthorThreads;
use App\Traits\HasGraphics;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use HighIdeas\UsersOnline\Traits\UsersOnlineTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Character;
use App\Models\Forum\Thread;
use App\Models\Forum\Post;
use App\Models\Audit;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class User extends Authenticatable implements IGraphics
{
    use Notifiable, Cachable, HasSlug, UsersOnlineTrait;
    use HasGraphics;
    use CanAuthorThreads;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'alias','parent_id','seen_at',  'role_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token', 'email'
    ];

    protected $appends = ['path'];

    protected $with = ['graphics','role'];

    protected $dates = ['seen_at'];

    protected static function boot()
    {
        parent::boot();

         static::addGlobalScope('posts_count', function($builder){
                 $builder->withCount('posts');
         });

    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('username')
            ->saveSlugsTo('slug')
            ->usingSeparator('_');
    }

    public function user()
    {
        return $this;
    }

    public function audits()
    {
        return $this->hasMany(Audit::class);
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

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

    public function parent()
    {
        return $this->belongsTo(User::class);
    }

    public function path() 
    {
        $key = $this->getRouteKeyName();
        return "/u/". $this[$key];
    }

    public function getPathAttribute()
    {
        return $this->path();
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscriptions\ThreadSubscription');
    }

    public function faction()
    {
        //return $this->role->name;
        return "Dauntless";
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isSuperAdmin()
    {
        return $this->role->name === 'Super Admin';
    }

    public function isAdmin()
    {
        return $this->isSuperAdmin() || $this->role->name === 'Admin';
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

    public function moderates()
    {
        return $this->belongsToMany('App\Models\Forum\Forum', 'forum_moderators');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @param $query
     * @param UserFilters $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, UserFilters $filters)
    {
        return $filters->apply($query);
    }

    public function isSelf()
    {
        return auth()->id() == $this->id;
    }

    public function forum()
    {
        return $this->belongsToMany('App\Models\Forum\Forum', 'user_forums');
    }

    public function subplots()
    {
        $category = Category::where('name','Development')->first();
        return $this->forum()->with(['category' => function ($query) use($category) {
            $query->where('id',$category->id);
        }])->first();
    }

    public function addPoints($num = 0)
    {
        $points = $this->points + $num;

        $this->points = $points;
        $this->save();
        return $this;
    }
}
