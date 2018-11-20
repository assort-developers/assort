<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
	// 商品検索
	public function index(){
		return view('product/product_search');
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
}
