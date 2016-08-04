<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function photos()
	{
		return $this->hasMany(ProductPhoto::class);
	}

	public function photo_primary()
	{
		return $this->hasOne(ProductPhoto::class);//->where('primary', '=', 1);
	}
}
