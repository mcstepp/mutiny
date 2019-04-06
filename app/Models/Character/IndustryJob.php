<?php

namespace App\Models\Character;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class IndustryJob extends Model
{
    use Cachable;

    protected $guarded = [];

    public $timestamps = false;

    public function industry()
    {
        return $this->belongsTo('App\Models\Character\Industry');
    }

    public function scopeWhereIndustry($query, $industry)
    {
        return $query->where('industry_id', $industry);
    }

}
