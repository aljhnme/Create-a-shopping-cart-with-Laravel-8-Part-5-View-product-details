<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
     
    protected $fillable=[
    	'name_product',
    	'price_product',
    	'about_product',
    	'rating',
    	'img_product',
    	'user_id'
    ];


}
