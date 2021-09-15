<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';
    protected $fillable = [
        'name',
        'price',
        'description',
        'gallery',
        'created_at',
        'updated_at',
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
