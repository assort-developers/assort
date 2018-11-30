<?php

namespace App\Models;

use \DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;

class ArrivalContent extends Model
{
		//
	protected $table = 'arrival_content';
	const UPDATED_AT = null;
	const CREATED_AT = 'arrival_at';
	protected $fillable= array('order_content_id','amount');

	public function order_content()
	{
		return $this->belongsTo('App\Models\OrderContent');
	}

	public static function getJoinAll($request = null){
		$arrival = ArrivalContent::select(
			'arrival_content.id',
			'arrival_content.arrival_at',
			'arrival_content.amount',
			'order_content.id as order_content_id',
			'order.update',
			'order.id as order_id',
			'product_codename.name as product_name',
			'brand.name as brand_name'
		)->join('order_content', 'arrival_content.order_content_id', '=', 'order_content.id')
		->join('order', 'order_content.order_id', '=', 'order.id')
		->join('brand', 'order.brand_id', '=', 'brand.id')
		->join('product', 'order_content.product_id', '=', 'product.id')
		->join('product_codename', 'product.product_codename_id', '=', 'product_codename.id');
		
		if($request->arrival_id != NULL) $arrival->where('arrival_content.id', '=', $request->arrival_id);
		if($request->order_id != NULL) $arrival->where('order.id', '=', $request->order_id);
		if($request->product_code != NULL) $arrival->where('product_codename.id', '=', $request->product_code);
		if($request->brand_id != NULL) $arrival->where('brand.id', '=', $request->brand_id);
		if($request->arrival_date_start != NULL){
			$arrival->whereDate('arrival_content.arrival_at', $request->arrival_date_start);
		}
		if($request->arrival_date_end != NULL){
			$arrival->whereDate('arrival_content.arrival_at',  $request->arrival_date_end);
		}
		if($request->update != NULL) $arrival->whereDate('order.update', $request->update);
		return $arrival->get();
	}

	public function getDate($col){
		$date = new DatetimeImmutable($this->$col);
		return $date->format('Y-m-d');
	}
}
