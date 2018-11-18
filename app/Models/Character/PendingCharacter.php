<?php

namespace App\Models\Character;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Character\Rank;
use App\Models\Character\Faction;
use Spatie\ModelStatus\HasStatuses;

class PendingCharacter extends Model
{
    //use Cachable;
    use HasStatuses;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pending_characters';

    /**
     * Override mass assignment protection
     *
     * @var array
     */
    protected $guarded = [];
    protected $with = ['faction'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($character){
            if (strtolower((new \ReflectionClass($character))->getShortName()) === 'pendingcharacter') {
                $character->setStatus('In Review');
            }
        });
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function username()
    {
        $name = $this->chosen_name ?: $this->first_name;
        return "{$name} {$this->last_name}";
    }

    public function getUsernameAttribute()
    {
        return $this->username();
    }

    public function rank()
    {
        //return $this->belongsTo(Rank::class);
    }

    public function origin_faction()
    {
        return $this->belongsTo(Faction::class);
        //->with('rank');
    }

    public function faction()
    {
        return $this->belongsTo(Faction::class);
            //->with('rank');
    }

    public function path()
    {
        return "/pc/{$this->id}";
    }
}
