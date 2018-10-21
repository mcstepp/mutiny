<?php 

namespace App\Traits;

//use App\Models\Activity;

trait RecordsActivity
{

	protected static function bootRecordsActivity()
	{
		foreach(static::getRecordEvents() as $event) {
			static::$event(function($model) use ($event) {
            	$model->recordActivity($event);
        	});
		}

		static::deleting(function($model) {
		    $model->activities()->delete();
        });
	}

	protected static function getRecordEvents()
	{
		return ['created'];
	}

	protected function recordActivity($event)
    {
    	$this->activities()->create([
    		'author_id' => $this->author_id,
            'author_type' => $this->author_type,
            'type' => $this->getActivityType($event)
    	]);

        // Activity::create([
        //     'author_id' => $this->author_id,
        //     'author_type' => $this->author_type,
        //     'subject_id' => $this->id,
        //     'subject_type' => strtolower(class_basename($this)),
        //     'type' => $this->getActivityType($event)
        // ]);
    }

    public function activities()
    {
    	return $this->morphMany('App\Models\Activity', 'subject');
    }

    protected function getActivityType($event)
    {
    	$type = strtolower(class_basename($this));

        return "{$event}_{$type}";
    }
}