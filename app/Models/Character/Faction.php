<?php

namespace App\Models\Character;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;


class Faction extends Model
{
    use Cachable;
    protected $guarded = [];
    public $timestamps = false;
    public $appends = ['icon'];

    public function characters()
    {
    	return $this->belongsToMany('App\Models\Character\Character');
    }

    public function pending_characters()
    {
    	return $this->belongsToMany('App\Models\Character\PendingCharacter');
    }

    public function getIconAttribute()
    {
        $icons = [
            'Amity' => 'leaf',
            'Abnegation' => 'hands-helping',
            'Candor' => 'balance-scale',
            'Dauntless' => 'fire',
            'Erudite' => 'eye',
            'Factionless' => 'fist-raised',
        ];

        return $icons[$this->name];
    }

    public function industries()
    {
        return $this->hasMany('App\Models\Character\Industry');
    }

    public function jobs()
    {
        return $this->hasManyThrough('App\Models\Character\IndustryJobs', 'App\Models\Character\Industry', 'faction_id', 'industry_id');
    }
}
