<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment_type', function(Blueprint $table)
		{
			$table->integer('id')->unique();
			$table->text('name');
			$table->text('alt_name');
			$table->boolean('active')->default(1);
			// $table->integer('parent_id');
			// $table->foreign('parent_id')->references('id')->on('makes');
			$table->timestamps();
			// $table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
