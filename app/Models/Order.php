<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_name',
        'last_name',
    	'first_name',
    	'post_number',
    	'address',
    	'phone',
    	'item_id',
    	'item_name',
        'size',
        'designers',
        'categories',
        'price',
    	'shipping_status',
        'arrival_date',
        'shipping_company',
        'shipping_id',
        'message_from_customer',
        'img_url'
        ];
}
