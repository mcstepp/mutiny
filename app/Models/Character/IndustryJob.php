<?php

namespace App\Models\Character;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class IndustryJob extends Model
{
    use Cachable;

    protected $guarded = [];

    public $timestamps = false;

    public function characters()
    {
        return $this->hasMany('App\Models\Character\Character','job_id');
    }

    public function pending_characters()
    {
        return $this->hasMany('App\Models\Character\PendingCharacter','job_id');
    }

    public function industry()
    {
        return $this->belongsTo('App\Models\Character\Industry');
    }

    public function faction()
    {
        return $this->belongsTo('App\Models\Character\Faction');
    }

    public function scopeWhereIndustry($query, $industry)
    {
        return $query->where('industry_id', $industry);
    }

}
