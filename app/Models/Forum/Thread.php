<?php

namespace App\Models\Forum;

use App\Filters\ThreadFilters;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\RecordsActivity;
use App\Models\Forum\Post;

class Thread extends Model
{
    //use RecordsActivity;
    use SoftDeletes, RecordsActivity;
    use Cachable;

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

        static::deleting(function ($thread){
            $thread->posts->each->delete();

           /*$thread->posts->each(function ($post) {
               $post->delete();
            });*/
        });

    }


    /**
     * Get a string path for the thread
     *
     * @return string
     */
    public function path()
    {
        return "/f/{$this->forum->id}/t/{$this->id}";
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

    public function getPostCountAttribute()
    {
        return $this->posts()->count();
    }

    public function lastPost()
    {
        return $this->hasOne(Post::class)->orderBy('id','desc');
    }

    /**
     * Add a post to the thread
     *
     * @param $post
     */
    public function addPost($post)
    {
        $this->posts()->create($post);
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
}
