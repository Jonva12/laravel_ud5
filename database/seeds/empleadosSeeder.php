<?php

use Illuminate\Database\Seeder;

class empleadosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) {
    		DB::table('empleados')->insert([
        		'nombre' => str_random(10),
        		'apellido1' => str_random(10),
        		'apellido2' => str_random(10),
        		'email' => str_random(10),
        		'telefono' => str_random(9),
    		]);
    	}
    }
}
