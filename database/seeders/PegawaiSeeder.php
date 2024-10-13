<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 120) as $index) {
            DB::table('pegawais')->insert([
                'name' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'unit_bidang' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
