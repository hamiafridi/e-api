<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\review;


class Product extends Model
{
    
	public function reviews() {
		return $this->hasMany(Review::class);
	}

}
