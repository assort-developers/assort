<?php

namespace App\Models;

use \DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';
	const CREATED_AT = 'create';
	const UPDATED_AT = 'update';
	private static $order_status = ['未確定', '発注済み', '着荷済み', '入庫済み'];

	protected $fillable= ['total', 'total_pay','delivery_date','ordered_staffid', 'latest_updated'];

	public function brand()
	{
		return $this->belongsTo('\App\Models\Brand');
	}

	public function order_content()
	{
		return $this->hasMany('\App\Models\OrderContent');
	}

	public function getOrderDate()
	{
		$date = new DatetimeImmutable($this->order_date);
		return $date->format('Y-m-d');
	}
	public function getOrderStatus(){
		return Order::$order_status[$this->status];
	}
	public function getUntilArrival(){
		$now = new DateTimeImmutable('now');
		$diff = $now->diff(new DateTimeImmutable($this->delivery_date));
		// $diff = $now->diff(new DateTimeImmutable('2018-12-25'));
		if($diff->format('%R') === '-'){
			return '';
		}elseif(intval($diff->format('%a')) > 0){
			return $diff->format('%a日後');
		}else{
			return '明日中';
		}
	}
}
