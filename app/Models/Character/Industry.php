<?php

namespace App\Models\Character;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use Cachable;
    protected $guarded = [];
    public $timestamps = false;

    public function faction()
    {
        return $this->belongsTo('App\Models\Character\Faction');
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\Character\IndustryJob');
    }

    public function characters(){

    }

    public function scopeWhereFaction($query, $faction)
    {
        return $query->where('faction_id', $faction);
    }
}