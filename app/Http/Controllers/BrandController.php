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
    public function index(Request $request)
    {
        $request->all();
        $prefs = config('pref');
        $brands=Brand::getJoinAll($request);
        
        return view('brand.brand_search', [
            'prefs'=>$prefs,
            'brands' => $brands,
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
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        $prefs = config('pref');

        return view('brand.brand_register',[
            'date'=>$date,
            'prefs'=>$prefs
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

        $create_brand=$request->all();
        $create_zip_code=($create_brand['zip_code1']."-".$create_brand['zip_code2']);
        
        //telの結合処理
        $create_tel=$create_brand['tel1']."-".$create_brand['tel2']."-".$create_brand['tel3'];
        
        //faxのnullチェックと結合処理
        if(!empty($create_brand['fax1'])&!empty($create_brand['fax2'])&!empty($create_brand['fax3'])){
            $create_fax=$create_brand['fax1']."-".$create_brand['fax2']."-".$create_brand['fax3'];
        }else{
            $create_fax="";
        }
        
        $brand_id=Brand::insertGetId([
            'code' => $create_brand['brand_code'],
            'name' => $create_brand['brand_name'],
            'kana' => $create_brand['brand_kana'],
            'zip_code' => $create_zip_code,
            'address_pref' => $create_brand['address_pref'],
            'address_city' => $create_brand['address_city'],
            'address_town' => $create_brand['address_town'],
            'address_build' => $create_brand['address_build'],
            'tel' => $create_tel,
            'mail' => $create_brand['mail'],
            'fax' => $create_fax,
            'updateby' => '1',
            'update' => NOW(),
            'staff_id' =>$create_brand['staff_id'],
        ]);
        return redirect('/brand/show/'.$brand_id);
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
        $prefs = config('pref');


        return view('brand.brand', [
            'brand' => $brand,
            'tel'=>$tel,
            'fax'=>$fax,
            'zip_code'=>$zip_code,
            'date'=>$date,
            'prefs'=>$prefs
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
        $brand_id=$request->input('brand_id');
        $update_data=$request->all();
        
        //zip_codeの結合処理
        $update_zip_code=($update_data['zip_code1']."-".$update_data['zip_code2']);
        
        //telの結合処理
        $update_tel=$update_data['tel1']."-".$update_data['tel2']."-".$update_data['tel3'];
        
        //faxのnullチェックと結合処理
        if(!empty($update_data['fax1'])&!empty($update_data['fax2'])&!empty($update_data['fax3'])){
            $update_fax=$update_data['fax1']."-".$update_data['fax2']."-".$update_data['fax3'];
        }else{
            $update_fax="";
        }


        //DB更新処理
        $brand = Brand::where('id',$brand_id)->update([
            'code' => $update_data['brand_code'],
            'name' => $update_data['brand_name'],
            'zip_code'=>$update_zip_code,
            'address_pref'=>$update_data['address_pref'],
            'address_city'=>$update_data['address_city'],
            'address_town'=>$update_data['address_town'],
            'address_build'=>$update_data['address_build'],
            'mail'=>$update_data['mail'],
            'tel'=>$update_tel,
            'fax'=>$update_fax,
            'staff_id'=>$update_data['staff_id'],
            //'updateby'=>$update_data['updateby'],
            'updateby'=>'1',
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
