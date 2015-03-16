<?php

class MakeModel extends Eloquent
{
	protected $table = 'models';
	protected $guarded = array();  // Important

	public function make()
    {
        return $this->belongsTo('Make', 'id', 'parent_id');
    }

	public static function sortedModels($value='')
	{
		return self::all()->sortby('name');
	}
}