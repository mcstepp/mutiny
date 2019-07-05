<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use Cachable;

    public $guarded = [];

    public function thread()
    {
        return $this->belongsTo('App\Models\Forum\Thread');
    }
}
