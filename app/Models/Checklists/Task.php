<?php

namespace App\Models\Checklists;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Cachable;

    public $timestamps = false;

    protected $guarded = [];

    protected $with = ['task_category'];

    public function task_category()
    {
        return $this->belongsTo('App\Models\Checklists\TaskCategory');
    }

}
