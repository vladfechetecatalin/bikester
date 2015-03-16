<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeAddTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('motociclete', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->integer('make');
			$table->integer('model');
			$table->text('name');
			$table->integer('categorie');
			$table->integer('an_fabricatie');
			$table->bigInteger('km');
			$table->integer('cc');
			$table->integer('kw');
			$table->integer('asigurare');
			$table->integer('itp');
			$table->integer('acte');
			$table->integer('schimb');
			$table->integer('pret');
			$table->integer('moneda');
			$table->text('descriere');
			$table->text('images');
			$table->integer('garantie');
			$table->integer('stare');
			$table->integer('promovat');
			$table->integer('likes');
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
