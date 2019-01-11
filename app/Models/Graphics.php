<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Graphics extends Model
{
    use Cachable;

    protected $guarded = [];

    public function owner()
    {
        return $this->morphTo();
    }
}
