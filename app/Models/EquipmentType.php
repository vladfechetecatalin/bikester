<?php

class EquipmentType extends Eloquent
{
	protected $table = 'equipment_type';
	protected $guarded = array();  // Important

	// public function models()
 //    {
 //        return $this->hasMany('MakeModel', 'parent_id', 'id');
 //    }

	public static function sortedMakes($value='')
	{
		return self::all()->sortby('name');
	}
}