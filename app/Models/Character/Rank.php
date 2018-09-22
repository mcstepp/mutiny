<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Model;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Character;


class Rank extends Model
{
    protected $guarded = [];
    
    public $timestamps = false;

    public function characters()
    {
    	return $this->belongsToMany(Character::class);
    }

    public function pending_characters()
    {
        return $this->belongsToMany(PendingCharacter::class);
    }
}
