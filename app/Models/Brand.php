<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
	public $timestamps = false;
	//protected $fillable = ['code','name','kana','zip_code','address_pref','address_city','address_town',''];
	protected $guarded = ['id'];

	public function product_codename()
	{
		return hasMany('\App\Models\ProductCodename');
	}

    public function getBrandDate()
	{
		$date = new DatetimeImmutable($this->brand_date);
		return $date->format('Y-m-d');
	}

	public function getPrefName() {
		return config('pref.'.$this->address_pref);
	}

	public static function getJoinAll($request=null){
		$brand = Brand::select(
			'brand.id',
			'brand.code',
			'brand.name',
			'brand.address_pref',
			'brand.mail',
			'brand.tel',
			'brand.fax',
			'brand.update',
			'staff.family_name as staff_family_name',
			'staff.first_name as staff_first_name'
		)->leftjoin('staff', 'staff.id', '=', 'brand.staff_id');
		
		//->toSql();
		//dd($brand);
		
		$staff_name=explode(" ",$request->staff_name);
		//dd($staff_name);

		if($request->brand_code != NULL) $brand->where('brand.code', '=', $request->brand_code);
		if($request->brand_name != NULL) $brand->where('brand.name', 'LIKE', "%$request->brand_name%");
		
		/* 検索項目は後から誰かが考えよう
			for($i=0;$i<count($staff_name);$i++){
			if($i=0&$staff_name[$i] != NULL){ $brand->where('staff_family_name', 'LIKE', "%$staff_name[$i]%");}
			else {$brand->where('staff_first_name', 'LIKE', "%$staff_name[$i]%");}
		} */
		return $brand->get();
	}
}
