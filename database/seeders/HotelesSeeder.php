<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 50; $i++) {
            \DB::table('list_hotels')->insert(array(
                'id'     => $faker->unique()->numberBetween(10000, 100000),
                'Ititle' => 'Hotel  ' . $faker->firstNameFemale . ' ' . $faker->lastName,
                'Istar'  => $faker->randomElement(['1','2','3','4','5']),
                'Ipais'  => $faker->randomElement(['Perú','Chile','Colombia','Ecuador','Bolivia','Argentina']),
                'Iciu'   => $faker->randomElement(['Calle','Jiron','Avenida']),
                'Idirec' => $faker->randomElement(['Calle 102','Jr. 22','Av. 3657']),
                'Itelf'  => '123456789',
                'Istate' => $faker->randomElement(['A','I']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
        }
    }
}
