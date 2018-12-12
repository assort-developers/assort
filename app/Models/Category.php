<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $table = 'category';
	public $timestamps = false;
	protected $guarded = ['id'];

	//検索用
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
		if($request->name != NULL) $category->where('category.name', 'LIKE', "%$request->name%");
		if($request->parent_cat_id != NULL) $category->where('category.parent_cat_id', '=', $request->parent_cat_id);
		if($request->parent_cat_name != NULL) $category->where('parent_category.name', 'LIKE', "%$request->parent_cat_name%");
		return $category->get();
		}

	//詳細ページ用
	public static function getCategory($category_id){
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
			->leftjoin('staff','category.updateby','=','staff.id')
			->where('category.id', '=', $category_id)
			->first();

		return $category;
	
	}
	//親カテゴリ一覧取得用
	public static function getParentCat(){
		$parent_cat = Category::select(
			'category.id',
			'category.name'
			)->get();
	
		return $parent_cat;
	}


	
}
