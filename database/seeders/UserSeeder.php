<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'id' => 1,
            'name' => 'fernando',
            'email' => 'fernando@weplant.com',
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 2,
            'name' => 'manuel',
            'email' => 'manuel@weplant.com',
            'password' => Hash::make('manuel'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 3,
            'name' => 'mauricio',
            'email' => 'mauricio@weplant.com',
            'password' => Hash::make('mauricio'),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 4,
            'name' => 'vanessa',
            'email' => 'vanessa@weplant.com',
            'password' => Hash::make('vanessa'),
            'created_at' => now(),
            'updated_at' => now()
        ],
    );
    }
}
