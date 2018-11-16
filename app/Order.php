<?php

namespace App;

use \DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';

	public function getOrderDate()
	{
		$date = new DatetimeImmutable($this->order_date);
		$this->$date->format('Y-m-d');
	}
}
