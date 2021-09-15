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

            'name'        => 'S20 ',
            'price'       => '20000',
            'category'    => 'devices',
            'description' => 'samsong s20 ',
            'gallery'     => 'https://i.gadgets360cdn.com/products/large/moto-g9-650x800-1598251072.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'fitness ',
            'price'       => '20',
            'category'    => 'snaks',
            'description' => 'corn flex',
            'gallery'     => 'https://i.pinimg.com/originals/ee/29/2e/ee292e9bbe6fc5418dc2cf11b9ccfb51.png',
        ]);

        DB::table('products')->insert([

            'name'        => 'coffee mate',
            'price'       => '15',
            'category'    => 'drinkes',
            'description' => 'ice coffee',
            'gallery'     => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cml-cinnamon-toast-crunch-32oz-cml-funfetti-32oz-001-1574112484.jpg?crop=0.459xw:0.574xh;0.245xw,0.321xh&resize=480:*',
        ]);

        DB::table('products')->insert([

            'name'        => 'nestle',
            'price'       => '10',
            'category'    => 'drinkes',
            'description' => 'cold water',
            'gallery'     => 'https://sc01.alicdn.com/kf/HTB1cE4gLXXXXXXkXFXXq6xXFXXXK/Plastic-Bottle-Nestle-Pure-Life-Mineral-Water.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'kitkat',
            'price'       => '30',
            'category'    => 'snaks',
            'description' => 'chocolate',
            'gallery'     => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c9/KitKat_logo.svg/1200px-KitKat_logo.svg.png',
        ]);
    }
}
