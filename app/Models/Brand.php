<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
	public $timestamps = false;
	//protected $fillable = ['code','name','kana','zip_code','address_pref','address_city','address_town',''];
	protected $guarded = ['id'];

    public function getBrandDate()
	{
		$date = new DatetimeImmutable($this->brand_date);
		return $date->format('Y-m-d');
	}

	public function getPrefName() {
		return config('pref.'.$this->address_pref);
	}
}
