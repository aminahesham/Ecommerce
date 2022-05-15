<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        DB::table('roles')->insert([
            'name'         => 'normal_user',
            'display_name' => 'normal user',
            'description'  => 'only can buy and make orders',
        ]);

        DB::table('roles')->insert([
            'name'         => 'seller_user',
            'display_name' => 'seller user',
            'description'  => 'can buy , make orders and add products',
        ]);

        DB::table('roles')->insert([
            'name'         => 'admin',
            'display_name' => 'admin',
            'description'  => 'acsses the dashboard',
        ]);
    }
}

