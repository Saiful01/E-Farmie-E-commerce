<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Saiful",
            'email' => "saiful013101@gmail.com",
            'password' => Hash::make('123456'),
            'user_type' => 1
        ]);
        \App\User::create([
            'name' => "Nusaira",
            'email' => "nusaira201@gmail.com",
            'password' => Hash::make('123456'),
            'user_type' => 1
        ]);
        \App\User::create([
            'name' => "Sayeeda",
            'email' => "sumisayeeda@gmail.com",
            'password' => Hash::make('123456'),
            'user_type' => 1
        ]);
    }
}
