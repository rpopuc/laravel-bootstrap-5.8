<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        \App\User::create([
            'name' => env('LOCAL_USER_NAME', 'Laravel'),
            'email' => env('LOCAL_USER_EMAIL', 'laravel@laravel.com'),
            'password' => \Hash::make(env('LOCAL_USER_PASSWORD', 'laravel')),
        ]);
    }
}
