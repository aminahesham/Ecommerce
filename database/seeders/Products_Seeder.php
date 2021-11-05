<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

            'name'        => 'Samsong A52 ',
            'price'       => '25000',
            'description' => 'smart phone ',
            'photo'       => 'https://m.media-amazon.com/images/I/81afsli5ctL._AC_SL1500_.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'Samsong S21 ',
            'price'       => '22000',
            'description' => 'smart phone',
            'photo'       => 'http://www.three.co.uk/static/images/device_pages/MobileVersion/Samsung/Galaxy_S21_5G/Phantom_Grey/carousel/1.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'coffee mate',
            'price'       => '15',
            'description' => 'ice coffee',
            'photo'       => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cml-cinnamon-toast-crunch-32oz-cml-funfetti-32oz-001-1574112484.jpg?crop=0.459xw:0.574xh;0.245xw,0.321xh&resize=480:*',
        ]);

        DB::table('products')->insert([

            'name'        => 'Microsoft Adge',
            'price'       => '30000',
            'description' => 'smart laptop',
            'photo'       => 'https://m.media-amazon.com/images/I/61OvV27-44L._AC_SL1500_.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'mac book',
            'price'       => '30000',
            'description' => 'apple laptop',
            'photo'       => 'https://static.acer.com/up/Resource/Acer/Laptops/Swift_3X/Images/20201008/Acer-Swift-3X_SF314-510G_Gold_modelmain.png',
        ]);
    }
}
