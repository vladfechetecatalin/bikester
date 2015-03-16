<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		// $this->call('MakeSeeder');
	}

}

class MakeSeeder extends Seeder {

    public function run()
    {
        \User::create(['email' => 'foo@bar.com']);
    }

}
