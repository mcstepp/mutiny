<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    public function faction()
    {
        return $this->belongsTo('App\Models\Character\Faction');
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\Character\Job');
    }

    public function scopeFaction($query, $faction)
    {
        return $query->where('faction_id', $faction);
    }
}
