<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graphics extends Model
{
    protected $guarded = [];

    public function owner()
    {
        return $this->morphTo();
    }
}
