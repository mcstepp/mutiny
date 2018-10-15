<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use Cachable;
    //

	protected $guarded = [];

	public function subject()
	{
		return $this->morphTo();
	}

	public function author()
	{
		return $this->morphTo();
	}
}
