<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function getPrefName() {
		return config('pref.'.$this->address_pref);
	}


    public static function getJoinAll_show($customer_id=null){
        $customer = Customer::select(
            'customer.id',
            'customer.family_name',
            'customer.first_name',
            'customer.birthday',
            'customer.gender',
            'customer.family_name_kana',
            'customer.first_name_kana',
            'customer.phone',
            'customer.mobile_phone',
            'customer.type',
            'customer.create_date',
            'customer.update_time',
            'customer.password'
        )
        ->where('customer.id', '=', $customer_id);
        return $customer->first();
    }

    public static function getJoinAll($request=null){
        $customer = Customer::select(
            'customer.id',
            'customer.family_name',
            'customer.first_name',
            'customer.birthday',
            'customer.gender',
            'customer.family_name_kana',
            'customer.first_name_kana',
            'customer.phone',
            'customer.mobile_phone',
            'customer.type',
            'customer.create_date',
            'customer.update_time',
            'customer.password'
        );

        if($request->id != NULL) $customer->where('customer.id', '=', $request->id);
        if($request->family_name != NULL) $customer->where('customer.family_name', 'LIKE', "%$request->family_name%");
		if($request->first_name != NULL) $customer->where('customer.first_name', 'LIKE', "%$request->first_name%");
		if($request->family_name_kana != NULL) $customer->where('customer.family_name_kana', 'LIKE', "%$request->family_name_kana%");
        if($request->first_name_kana != NULL) $customer->where('customer.first_name_kana', 'LIKE', "%$request->first_name_kana%");
        
        return $customer->get();
    }
}
