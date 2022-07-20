<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('tbl_all_users')->insert([
                'users_name' => $faker->users_name,
                'users_desc' => $faker->users_desc,
                'users_status' => $faker->users_status,
            ]);
        }
        
    }
}
