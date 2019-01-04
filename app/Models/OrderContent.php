<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeImmutable;

class OrderContent extends Model
{
		//
	protected $table = 'order_content';
	protected $fillable = ['order_id', 'product_id', 'amount', 'subtotal', 'is_arrival', 'arrival_date', 'arrival_staffid'];
	const UPDATED_AT = null;
	const CREATED_AT = null;

	public function order()
	{
		return $this->belongsTo('\App\Models\Order');
	}
	public function product()
	{
		return $this->belongsTo('\App\Models\Product');
	}

	public function arrival_content()
	{
		return $this->hasMany('\App\Models\ArrivalContent');
	}

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
