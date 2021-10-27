<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1;$i<=25;$i++){
            DB::table('siswas')->insert([
                'nama' => $faker->name,
                'nisn' => $faker->randomNumber,
                'no_hp' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'nilai'=>$faker->randomFloat(1, 85, 100),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
