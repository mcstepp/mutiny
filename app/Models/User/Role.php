<?php

namespace App\Models\User;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    use Cachable;
	protected $guarded = [];
    
    public $timestamps = false;

    public function users() 
    {
    	return $this->belongsToMany(User::class);
    }
}
