<?php

namespace App\Models\Subscriptions;

use App\Models\Forum\Thread;
use App\Notifications\ThreadWasReplied;
use App\User;
use Illuminate\Database\Eloquent\Model;

class ThreadSubscription extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function notify($post)
    {
        $this->user->notify(new ThreadWasReplied($this->thread, $post));
    }
}
