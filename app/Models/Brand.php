<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    
    public function getBrandDate()
	{
		$date = new DatetimeImmutable($this->order_date);
		return $date->format('Y-m-d');
	}
}
