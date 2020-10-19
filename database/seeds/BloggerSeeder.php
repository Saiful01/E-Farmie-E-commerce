<?php

use Illuminate\Database\Seeder;

class BloggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Blogger::create([
            'blogger_name' => "Saiful",
            'blogger_email' => "saiful013101@gmail.com",
            'blogger_phone' => "01825326541",
            'password' => Hash::make('123456'),
        ]);
        \App\Blogger::create([
            'blogger_name' => "Nusaira",
            'blogger_email' => "nusaira201@gmail.com",
            'blogger_phone' => "01825326542",
            'password' => Hash::make('123456'),
        ]);
        \App\Blogger::create([
            'blogger_name' => "Sayeeda",
            'blogger_email' => "sumisayeeda@gmail.com",
            'blogger_phone' => "01825326543",
            'password' => Hash::make('123456'),
        ]);


    }
}
