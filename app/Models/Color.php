<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
	public $timestamps = false;
	protected $guarded = ['id'];


	public static function getColor($request=null){

		$color=Color::select(
			'id',
			'print_color'
		);

		if($request->id != NULL) $color->where('id', '=', $request->id);
		if($request->print_color != NULL) $color->where('print_color', 'LIKE', "%$request->print_color%");

		return $color->get();
	}

	public static function getMatchColor($color1,$color2){

		$color=Color::select(
			'id',
			'print_color'
		)->where('id', '=', $color1)
		->orwhere('id', '=', $color2)
		->get();

		return $color;
	}

}
