<?php

namespace App\Models\Forum;

use App\Filters\ThreadFilters;
use App\Models\Subscriptions\ThreadSubscription;
use App\Notifications\ThreadWasReplied;
use App\Traits\Time;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\RecordsActivity;
use App\Models\Forum\Post;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use OwenIt\Auditing\Contracts\Auditable;


class Thread extends Model implements Auditable
{
    use SoftDeletes;
    use RecordsActivity;
    use Cachable;
    use HasSlug;
    use Time;
    use \OwenIt\Auditing\Auditable;


    /**
     * Override mass assignment protection
     *
     * @var array
     */
    protected $guarded = [];

    protected $appends = ['path'];
    
    protected $dates = ['deleted_at','happened_at'];

    protected static function boot()
    {
        parent::boot();

        // add post_count
        static::addGlobalScope('post_count', function($builder){
            $builder->withCount('posts');
        });

        // delete all posts, subscriptions, activity to threads
        static::deleting(function ($thread) {
            $thread->posts->each->delete();
            $thread->subscriptions->each->delete();
            $thread->activities->each->delete();

            if (isset($thread->announcement)) {
                $thread->announcement->delete();
            }
        });

        // if thread is IC, award author +5 points
        static::created(function ($thread) {
            if ($thread->isIc()) {
                $thread->author->addPoints(5);
            }
        });

    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(20);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * Get a string path for the thread
     *
     * @return string
     */
    public function path()
    {
        $key = $this->getRouteKeyName();
        return "/f/{$this->forum_id}/t/" . $this[$key];
    }

    public function getPathAttribute()
    {
        return $this->path();
    }

    public function announcement()
    {
        return $this->hasOne('App\Models\Announcement');
    }

    /**
     * A thread belongs to an author
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->morphTo();
        //return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * A thread is assigned to a forum
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    /**
     * A thread may have many posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(ThreadSubscription::class);
    }

    public function activities()
    {
        return $this->morphMany('App\Models\Activity', 'subject');
    }

    public function participants()
    {
        return $this->posts()->distinct()->get(['author_id', 'author_type']);

    }

    public function getPostCountAttribute()
    {
        return $this->posts()->count();
    }

    public function getParticipantCountAttribute()
    {
        return $this->participants()->count();

    }

    public function getIsSubscribedToAttribute()
    {
        return $this->subscriptions()
                ->where('user_id', auth()->id())
                ->exists();
    }

    public function getIcTimeAttribute()
    {
        return $this->getIcTime();
    }

    public function lastPost()
    {
        return $this->hasOne(Post::class)->orderBy('id','desc');
    }

    public function firstPost()
    {
        return $this->hasOne(Post::class)->orderBy('id','asc');
    }

    /**
     * Add a post to the thread
     *
     * @param $post
     * @return Thread
     */
    public function addPost($post)
    {
        $post = $this->posts()->create($post);

        $this->subscriptions->filter(function ($sub) use ($post){

            return (!$post->ic && $sub->user_id != $post->author_id) ||
                ($post->ic && $sub->user_id != $post->author->owner->id);

        })->each->notify($post);

        return $this;
    }

    public function subscribe($userId = null)
    {
        $this->subscriptions()->create([
            'user_id' => $userId ?: auth()->id()
        ]);
    }

    public function unsubscribe($userId = null)
    {
        $this->subscriptions()->where('user_id', $userId ?: auth()->id())
        ->delete();
    }

    /**
     * @param $query
     * @param ThreadFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, ThreadFilters $filters)
    {
        return $filters->apply($query);
    }

    public function pin($status = true)
    {
        $this->pinned = $status;
        $this->timestamps = false;
        $this->save();
        return $this;
    }


    public function lock($status = true)
    {
        $this->locked = $status;
        $this->timestamps = false;
        $this->save();
        return $this;
    }

    public function isIc()
    {
        return $this->forum->ic;
    }
}
