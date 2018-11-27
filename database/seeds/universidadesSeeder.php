<?php

use Illuminate\Database\Seeder;

class universidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
    		DB::table('universidades')->insert([
        		'nombre' => str_random(10),
            	'pais' => str_random(10)
            ]);
    	}
    }
}
