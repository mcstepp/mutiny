<?php

namespace App\Models\Checklists;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model
{
    use Cachable;

    protected $guarded = [];

    public $timestamps = false;

    public function tasks()
    {
        return $this->hasMany('App\Models\Checklists\Task');
    }
}
