<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Character\Rank;
use App\Models\Character\Faction;

class PendingCharacter extends Model
{
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
    protected $with = ['rank', 'faction'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }

    public function faction()
    {
        return $this->belongsTo(Faction::class)
            ->with('rank');
    }
}
