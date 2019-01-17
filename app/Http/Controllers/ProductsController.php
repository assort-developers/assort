<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCodename;

class ProductsController extends Controller
{
	// 商品検索
	public function index(){
        $parent_category = Category::getParentCat(true);
        $child_category = Category::getChildCat();

        $product_codenames = ProductCodename::all();
		return view('product/product_search',[
            'parent_category' => $parent_category,
            'child_category' => $child_category,
            'product_codenames' => $product_codenames,
        ]);
	}
	// 商品デザイン管理
	public function show(){
		return view('product/product');
	}
	public function size_show($product_id, $size_id){
		return view('product/product_size');
	}
	public function create()
    {
				//
				return('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
			return('designdestroy');
		}
		public function size_destroy($product_id, $size_id)
    {
				//
			return('size'.$product_id.$size_id.'destroy');
    }

    public function search_api_products(Request $request)
    {
        //dd($request->product_id,$request->product_name);
        $products = Product::select('product.id', 'product_codename.name', 'size.print_size', 'color.print_color')
        ->leftJoin('product_codename','product_codename.id', '=', 'product.product_codename_id')
        ->leftJoin('size', 'size.id', '=','product.size_id')
        ->leftJoin('color', 'color.id', '=', 'product.color_id')
        ->leftJoin('brand', 'brand.id', '=', 'product_codename.brand_id')->get();
        // if($request->product_id != null){$products->where('product.id', '=', $request->product_id)->get();}
        // if($request->product_name != null){$products->where('product_codename.name', 'LIKE', $request->product_name);}
        // if($request->brand_id != null){$products->where('brand.id', '=', $request->brand_id);}
        // if($request->brand_name != null){$products->where('brand.name', '=', $request->brand_name);}
        // $products->get();

        return [
            'products' => $products
        ];
    }
}
