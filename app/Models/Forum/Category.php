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
        'name', 'description'
    ];

    public function forums()
    {
    	return $this->hasMany(Forum::class);
    }
}
