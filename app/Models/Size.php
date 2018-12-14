<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';
	public $timestamps = false;
    protected $guarded = ['id'];


    public static function getSize($request=null){
		$size=Size::select(
            'id',
            'print_size',
            'gender'
        );
        if($request->id != NULL) $size->where('id', '=', $request->size_id);
		if($request->print_size != NULL) $size->where('print_size', 'LIKE', "%$request->print_size%");
        if($request->gender != NULL) $size->where('gender', $request->gender);
        return $size->get();
	}


    public function getGender() {
		return config('gender.'.$this->gender);
    }
    
    public static function getMatchSize($size1,$size2){
		$size=size::select(
            'id',
            'gender',
			'print_size'
		)->where('gender', '=', $size1['gender'])
        ->orwhere('print_size', '=', $size1['print_size'])
        ->orwhere('print_size', '=', $size2['print->size'])
		->get();
		return $size;
	}
}
