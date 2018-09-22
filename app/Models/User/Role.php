<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
	protected $guarded = [];
    
    public $timestamps = false;

    public function users() 
    {
    	return $this->belongsToMany(User::class);
    }
}
