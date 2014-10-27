<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function($tabla) 
        {
            $tabla->increments('id');
            $tabla->string('usuario', 50);
            $tabla->string('email', 50);
            $tabla->string('cargo', 20);
            $tabla->string('password', 100);
            //campos para controlar inserts y updates
            //created_at updated_at
            $tabla->timestamps();
 
        }); 
        DB::table('usuarios')->insert(
            array(
                'usuario' => 'cinthya',   
                'email' => 'algo@hotmail.com',  
                'cargo' => 'secretaria',
                'password' => Hash::make('123456'),
            )
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		   Schema::drop('usuarios');
	}

}
