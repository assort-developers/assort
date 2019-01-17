<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Recieved extends Model
{
    //
    protected $table = 'recieved';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function recieved_content()
	{
		return $this->hasMany('\App\Models\RecievedContent');
    }
    public function customer(){
        // $customer = DB::select('SELECT * FROM customer WHERE id = '. $this->customer_id);
        // //dd($customer[0]->id);
        // return $customer[0];
        return $this->belongsTo('\App\Models\Customer');
    }
    public function customer_address(){
        return $this->belongsTo('\App\Models\CustomerAddress');
    }
}
