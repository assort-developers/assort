<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecievedContent extends Model
{
    //
    protected $table = 'recieved_content';
    protected $guarded = ['id'];
    public function recieved()
    {
        return belongsTo('\App\Models\recieved');
    }
    public function product()
    {
        return $this->belongsTo('\App\Models\Product');
    }
    public function getStatus(){
        if($this->shipment_status == 0){
            return '未出荷';
        }else{
            return '出荷済み';
        }
    }
}
