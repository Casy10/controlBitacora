<?php

use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesores', function($table)
		{
			$table->increments('id');
			$table->string('name', 32);
			$table->string('rfc', 32);
			$table->string('email', 320);
			$table->string('cargo', 60);
			$table->string('password', 64);
                        // required for Laravel 4.1.26
            $table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profesores');
		
	}
}