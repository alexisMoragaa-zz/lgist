<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->insert(array(
			'name'=>'Cliente',
			'email'=>'client@log.com',
			'password'=>\Hash::make('cliente'),
			'perfil' =>'2'

		));

		\DB::table('users')->insert(array(
			'name'=>'Usuario',
			'email'=>'usert@log.com',
			'password'=>\Hash::make('usuario'),
			'perfil' =>'4'

		));

		\DB::table('users')->insert(array(
			'name'=>'Administrador',
			'email'=>'admin@log.com',
			'password'=>\Hash::make('administrador'),
			'perfil' =>'6'

		));

	
	}

}
