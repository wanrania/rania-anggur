<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('users')->insert([
            'name'       => 'Admin',
            'email'      => 'admin@example.com',
            'password'   => Hash::make('password123'), // bisa diganti
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // kalau mau generate user dummy tambahan (opsional)
        foreach (range(1, 1000) as $i) {
            DB::table('users')->insert([
                'name'       => $faker->name,
                'email'      => $faker->unique()->safeEmail,
                'password'   => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
