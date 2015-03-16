<?php

class BikeCategories extends Eloquent
{
	protected $table = 'bike_category';
	protected $guarded = array();  // Important

	// public function models()
 //    {
 //        return $this->hasMany('MakeModel', 'parent_id', 'id');
 //    }

	public static function sortedCategories($value='')
	{
		return self::all()->sortby('name');
	}
}