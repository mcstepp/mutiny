<?php

namespace App\Models\Forum;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\RecordsActivity;

class Post extends Model
{
    use SoftDeletes, RecordsActivity;
    use Cachable;
    //use Favoritable, RecordsActivity;

    protected $guarded = [];
    protected $with = ['author'];
    //protected $with = ['author', 'favorites'];
    protected $dates = ['deleted_at'];

     /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    //protected $touches = ['thread'];

    // character or user
    public function author()
    {
        return $this->morphTo();
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

}

