<?php

class Makes extends Eloquent
{
	protected $table = 'makes';
	protected $guarded = array();  // Important

	public function models()
    {
        return $this->hasMany('MakeModel', 'parent_id', 'id');
    }

	public static function sortedMakes($value='')
	{
		return self::all()->sortby('name');
	}
}