<?php

namespace App\Models\Checklists;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class BonusMode extends Model
{
    use Cachable;

    public $timestamps = false;

    protected $guarded = [];
}
