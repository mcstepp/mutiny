<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Model;
use App\Models\Forum\Forum;

/**
 * Category
 *
 */

class Category extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function forums()
    {
    	return $this->hasMany(Forum::class);
    }
}
