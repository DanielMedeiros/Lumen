<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $faker = Faker\Factory::create();

        for($i = 0; $i <= 100; $i++){
        	App\Clientes::create([
 				'nome' => $faker->name,
 				'cnpj' => $faker->numberBetween(00000000001, 99999999999)
        	]);

        echo "Registro (".$i.") Cadastrado"."\n" 	;
        }
    }
}
