<?php

namespace App\Models\Forum;

use App\Filters\ThreadFilters;
use App\Models\Subscriptions\ThreadSubscription;
use App\Notifications\ThreadWasReplied;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\RecordsActivity;
use App\Models\Forum\Post;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Thread extends Model
{
    //use RecordsActivity;
    use SoftDeletes, RecordsActivity;
    use Cachable;
    use HasSlug;

    /**
     * Override mass assignment protection
     *
     * @var array
     */
    protected $guarded = [];
    
    protected $dates = ['deleted_at'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('post_count', function($builder){
            $builder->withCount('posts');
        });

        static::deleting(function ($thread) {
            $thread->posts->each->delete();

            $thread->subscriptions->each->delete();
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
        return "/f/{$this->forum->id}/t/" . $this[$key];
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
        return $this;
    }


    public function lock($status = true)
    {
        $this->locked = $status;
        return $this;
    }

}
