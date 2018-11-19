<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeImmutable;

class OrderContent extends Model
{
		//
	protected $table = 'order_content';
	const UPDATED_AT = null;

	public function getArrivalDate()
	{
		if($this->arrival_date == null){
			return '未到着';
		}
		$date = new DatetimeImmutable($this->arrival_date);
		return $date->format('Y-m-d');
	}

	public function getArrivableCount(){
		return $this->amount - $this->is_arrival;
	}
}
