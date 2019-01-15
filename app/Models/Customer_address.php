<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_address extends Model
{
    protected $table = 'customer_address';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function getPrefName() {
		return config('pref.'.$this->address_pref);
	}


    public static function getJoinAll_show($customer_id=null){
        $customer_address = Customer_address::select(
            'customer_address.id',
            'customer_address.customer_id',
            'customer_address.zip_code',
            'customer_address.address_pref',
            'customer_address.address_city',
            'customer_address.address_town',
            'customer_address.address_build',
            'customer_address.address_name',
            'customer_address.contact_tel'
        )
        ->where('customer_address.customer_id', '=', $customer_id);
        return $customer_address->get();
    }

    public static function getJoinAll_address_show($customer_id=null,$id=null){
        $customer_address = Customer_address::select(
            'customer_address.id',
            'customer_address.customer_id',
            'customer_address.zip_code',
            'customer_address.address_pref',
            'customer_address.address_city',
            'customer_address.address_town',
            'customer_address.address_build',
            'customer_address.address_name',
            'customer_address.contact_tel'
        )
        ->where('customer_address.customer_id', '=', $customer_id)
        ->where('customer_address.id', '=', $id);
        return $customer_address->first();
    }

    public static function getJoinAll($request=null){
        $customer_address = Customer_address::select(
            'customer_address.customer_id',
            'customer_address.zip_code',
            'customer_address.address_pref',
            'customer_address.address_city',
            'customer_address.address_town',
            'customer_address.address_build',
            'customer_address.address_name',
            'customer_address.contact_tel'
        );

        if($request->customer_id != NULL) $customer_address->where('customer_address.customer_id', '=', $request->customer_id);
        return $customer_address->get();
    }
}
