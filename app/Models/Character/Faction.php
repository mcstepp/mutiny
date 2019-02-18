<?php

namespace App\Models\Character;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Character;


class Faction extends Model
{
    use Cachable;
    protected $guarded = [];
    public $timestamps = false;
    public $appends = ['icon'];

    public function characters()
    {
    	return $this->belongsToMany(Character::class);
    }

    public function pending_characters()
    {
    	return $this->belongsToMany(PendingCharacter::class);
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
}
