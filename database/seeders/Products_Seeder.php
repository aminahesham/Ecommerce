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

            'name'        => 'lays ',
            'price'       => '60',
            'category'    => 'snaks',
            'description' => 'fried potato ships',
            'gallery'     => 'https://cdn.docplexus.com/114/9/0/23566c49-f918-4705-bec0-4c70dbccc676__t.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'up&go ',
            'price'       => '25',
            'category'    => 'snaks',
            'description' => 'fresh orange juice',
            'gallery'     => 'https://res.cloudinary.com/sanitarium/image/fetch/q_auto/https://www.sanitarium.com.au/getmedia%2Fb63b7171-9bdc-4fa1-ae12-3e35cc33c5b3%2F2020_UP-GO_ProductTile.jpg%3Fwidth%3D578%26height%3D350%26ext%3D.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'laptop dell',
            'price'       => '20000',
            'category'    => 'devices',
            'description' => 'laptop dell core i7 , ram 8',
            'gallery'     => 'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06539618.png',
        ]);

        DB::table('products')->insert([

            'name'        => 'canoon',
            'price'       => '16000',
            'category'    => 'devices',
            'description' => 'degital camera ',
            'gallery'     => 'https://m.media-amazon.com/images/I/914hFeTU2-L._SL1500_.jpg',
        ]);

        DB::table('products')->insert([

            'name'        => 'samsong LCD',
            'price'       => '8000',
            'category'    => 'devices',
            'description' => 'altra tv samsong degital ',
            'gallery'     => 'https://images.samsung.com/is/image/samsung/eg-fhd-t5300-ua43t5300auxeg-rperspectiveblack-254763435?$720_576_PNG$',
        ]);
    }
}
