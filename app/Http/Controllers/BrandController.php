<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('brand/brand_search', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brand_id)
    {
        $brand = Brand::where('id',$brand_id)->first();
        //以下の処理は微妙
        $tel=explode("-", $brand['tel']);
        $zip_code=explode("-", $brand['zip_code']);
        $fax=explode("-", $brand['fax']);
        if(empty($fax)){
            $fax=array(
                "",
                "",
                ""
            );
        }
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');

        return view('brand/brand', [
            'brand' => $brand,
            'tel'=>$tel,
            'fax'=>$fax,
            'zip_code'=>$zip_code,
            'date'=>$date
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
        $brand_id=$request->input('brand_code');
        $update_data=$request->all();
        $update_zip_code=($update_data['zip_code1']."-".$update_data['zip_code2']);
        // prefの処理不明
        $update_address_pref='1';
        $update_tel=$update_data['tel1']."-".$update_data['tel2']."-".$update_data['tel3'];
        if(!empty($update_data['fax1'])&!empty($update_data['fax2'])&!empty($update_data['fax3'])){
            $update_fax=$update_data['fax1']."-".$update_data['fax2']."-".$update_data['fax3'];
        }else{
            $update_fax="";
        }
        //db修正後"adres_*"と"bild"を修正する必要がある
        //$brand = Brand::find($request->$brand_id)->update([
        $brand = Brand::where('id',$brand_id)->update([
            //'id' => $update_data['brand_code'],
            'name' => $update_data['brand_name'],
            'zip_code'=>$update_zip_code,
            'address_pref'=>$update_address_pref,
            'addres_city'=>$update_data['address_city'],
            'addres_town'=>$update_data['address_town'],
            'addres_bild'=>$update_data['address_build'],
            'mail'=>$update_data['mail'],
            'tel'=>$update_tel,
            'fax'=>$update_fax,
            'staff_id'=>$update_data['staff_id'],
            'updateby'=>$update_data['updateby'],
            'update'=>NOW(),
        ]);
        return redirect('/brand/show/'.$brand_id);
        

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
