<?php

class ProfesorTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('profesores')->delete();
		Profesor::create(array(
			'name'     => 'Cinthya',
			'rfc' => 'casy911012mrs',
			'email'    => 'casy1s@gmail.com',
			'cargo'    => 'asesorada buena',
			'password' => Hash::make('gatito'),
		));
	}

}