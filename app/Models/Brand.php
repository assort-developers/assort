<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    public $timestamps = false;
    public function getBrandDate()
	{
		$date = new DatetimeImmutable($this->brand_date);
		return $date->format('Y-m-d');
	}
}
