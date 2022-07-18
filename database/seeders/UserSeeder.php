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
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Fernando',
                'email' => 'fernando@weplant.com',
                'password' => Hash::make('secret'),
                'phone' => '5565636702',
                'location' => 'Ixtapaluca',
                'about_me' => 'I am a web developer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'manuel',
                'email' => 'manuel@weplant.com',
                'password' => Hash::make('manuel'),
                'phone' => '5532167890',
                'location' => 'Nezahualcóyotl',
                'about_me' => 'I am a web developer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'mauricio',
                'email' => 'mauricio@weplant.com',
                'password' => Hash::make('mauricio'),
                'phone' => '5545678901',
                'location' => 'Nezahualcóyotl',
                'about_me' => 'I am a analyst',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'vanessa',
                'email' => 'vanessa@weplant.com',
                'password' => Hash::make('vanessa'),
                'phone' => '5510111213',
                'location' => 'Ixtapaluca',
                'about_me' => 'I am a analyst',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
