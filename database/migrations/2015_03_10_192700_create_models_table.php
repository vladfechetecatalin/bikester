<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('models', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('name');
			$table->string('alt_name');
			$table->boolean('active')->default(1);
			$table->integer('parent_id');
			$table->foreign('parent_id')->references('id')->on('makes');
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
