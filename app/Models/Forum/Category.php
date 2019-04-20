<?php

namespace App\Models\Forum;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forum\Forum;

/**
 * Category
 *
 */

class Category extends Model
{
    use Cachable;

    protected $fillable = [
        'name', 'description', 'private'
    ];

    public function forums()
    {
    	return $this->hasMany(Forum::class);
    }

    public function getIconAttribute()
    {
        $icons = [
            'Amity' => 'leaf',
            'Abnegation' => 'hands-helping',
            'Candor' => 'balance-scale',
            'Dauntless' => 'fire',
            'Erudite' => 'eye',
            'Factionless Alexandria' => 'fist-raised',
            'City Central' => 'landmark',
            'Out of Character' => 'home'
        ];

        return $icons[$this->name];
    }
}
