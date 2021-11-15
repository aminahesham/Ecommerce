<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\Permission;


class Permissions_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $manageUsers = Permission::create([
            'name' => 'manage-users',
            'display_name' => 'manage users', // optional
            'description' => 'manage users table ', // optional
            ]);

        $updateUser = Permission::create([
                'name' => 'update-user',
                'display_name' => 'update user', // optional
                'description' => 'update user data ', // optional
                ]); 
                
        $addUser = Permission::create([
                    'name' => 'add-user',
                    'display_name' => 'add user', // optional
                    'description' => 'add new user', // optional
                    ]);             
        $updateProduct = Permission::create([
                'name' => 'update-products',
                'display_name' => 'update products', // optional
                'description' => 'update product details  ', // optional
                ]);

        $addProduct = Permission::create([
                    'name' => 'add-product',
                    'display_name' => 'add product', // optional
                    'description' => 'add new product   ', // optional
                    ]);


    }
}
