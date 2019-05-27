<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public $guarded = [];

    public function thread()
    {
        return $this->belongsTo('App\Models\Forum\Thread');
    }
}
