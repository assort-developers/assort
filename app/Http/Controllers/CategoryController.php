<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->all();
        $categorys=Category::getJoinAll($request);
        
        return view('category.category_search', [
            'categorys' => $categorys,
            'request'=>$request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categorys=Category::getParentCat();
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        
        return view('category.category_register',[
            'date'=>$date,
            'parent_categorys'=>$parent_categorys
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create_category=$request->all();

        $category=Category::where('name','=',$create_category['name'])->where('parent_cat_id','=',$create_category['parent_cat_id'])
        ->first();

        if(!empty($category)){
            return redirect('/category/show/'.$category->id);
        }else{
            $category_id=Category::insertGetId([
                'name'=>$create_category['name'],
                'parent_cat_id'=>$create_category['parent_cat_id'],
                'updateby'=>'1',
                'update'=>NOW(),
            ]);
            return redirect('/category/show/'.$category_id);
        }


        /* return redirect('/category/show/'.$->id); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parent_categorys=Category::getParentCat();
        $category=Category::getCategory($id);
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        
        return view('category.category',[
            'category'=>$category,
            'date'=>$date,
            'parent_categorys'=>$parent_categorys
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update_data=$request->all();


        $category = Category::where('id',$update_data['id'])->update([
            'name'=>$update_data['name'],
            'parent_cat_id'=>$update_data['parent_cat_id'],
            'updateby'=>'1',
            'update'=>NOW(),
        ]);

        return redirect('/category/show/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
