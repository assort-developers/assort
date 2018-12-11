<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';
	public $timestamps = false;
	protected $guarded = ['id'];

    public static function getJoinAll($request=null){
		$category = Category::select(
            'category.id',
            'category.name',
            'category.parent_cat_id',
            'parent_category.name as parent_cat_name',
            'category.updateby',
            'staff.family_name as staff_family_name',
            'staff.first_name as staff_first_name',
            'category.update'
        )->leftjoin('category as parent_category', 'parent_category.id', '=', 'category.parent_cat_id')
        ->leftjoin('staff','category.updateby','=','staff.id');
        
        //->toSql();
		//dd($category);

		if($request->id != NULL) $category->where('category.id', '=', $request->id);
		if($request->category_name != NULL) $category->where('category.name', 'LIKE', "%$request->category_name%");
        if($request->parent_category_name != NULL) $category->where('parent_category.name', 'LIKE', "%$request->parent_category_name%");
        return $category->get();
        }
}
