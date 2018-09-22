<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Model;
use App\Models\Forum\Category;
use App\Models\Forum\Thread;
use App\Models\Forum\Post;

class Forum extends Model
{
    protected $fillable = [
        'category_id', 
        'name', 
        'description', 
        'private', 
        'ic'
    ];

    protected $with = ['category'];

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
}
