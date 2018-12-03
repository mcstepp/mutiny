<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    //protected $with = ['user_id'];

    //  user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
