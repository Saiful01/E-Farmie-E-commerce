<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Slider::create([
                'slider_image' => '1.jpg.png',
                'slider_name' => 'deafult',
            ]
        );
        \App\Slider::create([
                'slider_image' => '2.jpg.jpg',
                'slider_name' => 'deafult',
            ]
        );
        \App\Slider::create([
                'slider_image' => '2.jpg.jpg',
                'slider_name' => 'deafult',
            ]
        );
    }
}
