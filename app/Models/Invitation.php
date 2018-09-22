<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{

    protected $guarded = [];
    protected $with = ['owner_id'];

    //  user
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

}
