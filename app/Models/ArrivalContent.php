<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArrivalContent extends Model
{
		//
	protected $table = 'arrival_content';
	const UPDATED_AT = null;
	const CREATED_AT = 'arrival_at';
	protected $fillable= array('order_content_id','amount');
}
