<?php

namespace App\Models\Forum;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\RecordsActivity;
use Illuminate\Support\Arr;
use OwenIt\Auditing\Contracts\Auditable;
use PheRum\BBCode\Facades\BBCode;

class Post extends Model implements Auditable
{
    use SoftDeletes, RecordsActivity;
    use Cachable;
    use \OwenIt\Auditing\Auditable;
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

    protected static function boot()
    {
        parent::boot();

        // if post is IC, award author +5 points
        static::created(function ($post) {
            if ($post->isIc()) {
                $post->author->addPoints(5);
            }
        });

        static::deleting(function ($post) {
            $post->activities->each->delete();
        });

    }


    // character or user
    public function author()
    {
        return $this->morphTo();
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function path()
    {
        $thread = $this->thread->path();
        return $thread . "/" . $this->id;
    }

    public function activities()
    {
        return $this->morphMany('App\Models\Activity', 'subject');
    }

    public function isIc()
    {
        return $this->author_type === 'character';
    }

//    public function transformAudit(array $data): array
//    {
//
//        if ($data && $data['old_values']) {
//            $data['old_values']['body'] = BBCode::stripBBCodeTags($data['old_values']['body']);
//        }
//
//        $data['new_values']['body'] = BBCode::stripBBCodeTags($data['new_values']['body']);
//
//        return $data;
//    }

}

