<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingcart extends Model
{
	protected $fillable = [
	'product_id', 'product_name', 'quantity', 'price',
	];

}
