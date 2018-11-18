<?php

namespace App\Models;

use \DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';
	const CREATED_AT = 'create';
	const UPDATED_AT = 'update';
	public static $order_status = ['未発注', '未発送', '配送中', '着荷済み', '入庫済み'];

	public function getOrderDate()
	{
		$date = new DatetimeImmutable($this->order_date);
		$this->$date->format('Y-m-d');
	}
}
