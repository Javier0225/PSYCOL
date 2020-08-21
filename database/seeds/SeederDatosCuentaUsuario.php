<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class SeederDatosCuentaUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i<50; $i++){
            DB::table('users')->insert(array(

                'correo'=>$faker->email,
                'usuario'=>$faker->userName,
                'contra'=>password_hash($faker->userName,PASSWORD_DEFAULT)

            ));
        }
    }
}
