<?php

namespace App\Models\Forum;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forum\Category;
use App\Models\Forum\Thread;
use App\Models\Forum\Post;
use App\User;
use OwenIt\Auditing\Contracts\Auditable;

class Forum extends Model implements Auditable
{
    use Cachable;
    use \OwenIt\Auditing\Auditable;

    
    protected $fillable = [
        'category_id', 
        'name', 
        'description', 
        'private', 
        'ic'
    ];

    protected $with = ['category'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('thread_count', function($builder){
            $builder->withCount('threads');
        });

        static::addGlobalScope('post_count', function($builder){
            $builder->withCount('posts');
        });

        static::deleting(function ($forum){
            $forum->threads->each->delete();

            /*$thread->posts->each(function ($post) {
                $post->delete();
             });*/
        });

    }

    public function path()
    {
    	return "/f/{$this->id}";
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function threads()
    {
    	return $this->hasMany(Thread::class);
    }

    public function posts()
    {
    	return $this->hasManyThrough(Post::class, Thread::class);
    }

    public function getThreadCountAttribute()
    {
        return $this->threads()->count();
    }

    public function getPostCountAttribute()
    {
        return $this->posts()->count();
    }

    public function getParticipantCountAttribute()
    {
        return $this->posts()->distinct()->get(['posts.author_id', 'posts.author_type'])->groupBy(['author_id', 'author_type'])->count();
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'private_forum_users');
    }

    public function moderators()
    {
        return $this->belongsToMany('App\User', 'forum_moderators');
    }
}
