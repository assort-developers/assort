<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Customer_address;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->all();
        $customers = Customer::getJoinAll($request);
        $customer_address = Customer_address::getjoinAll($request);
        return view('customer/customer_search',[
            'customers' => $customers,
            'request' => $request
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
         //
        return view('/customer.customer_register',[
            'date'=>$date,
            'prefs'=>$prefs
        ]);


    }

    public function address_create($customer_id)
    {
        $customer=Customer::getJoinAll_show($customer_id);
        $prefs = config('pref');
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        return view('/customer.customer_address_register', [
            'customer'=>$customer,
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
        $create_customer=$request->all();
        $create_zip_code=($create_customer['zip_code1']."-".$create_customer['zip_code2']);
        
        
        //telの結合処理
        $create_tel=$create_customer['tel1']."-".$create_customer['tel2']."-".$create_customer['tel3'];
        $create_mobile=$create_customer['mobile1']."-".$create_customer['mobile2']."-".$create_customer['mobile3'];

        $customer_id=Customer::insertGetId([
            'family_name' => $create_customer['family_name'],
            'first_name' => $create_customer['first_name'],
            'birthday'=>$create_customer['birthday'],
            'gender'=>$create_customer['gender'],
            'family_name_kana'=>$create_customer['family_name_kana'],
            'first_name_kana'=>$create_customer['first_name_kana'],
            'phone' => $create_tel,
            'mobile_phone' => $create_mobile,
            'create_date' => NOW(),
            'update_time' => NOW(),
            ]);
            //dd($customer_id);

        $customer_address=Customer_address::insertGetId([
            'customer_id' => $customer_id,
            'zip_code' => $create_zip_code,
            'address_pref' => $create_customer['address_pref'],
            'address_city' => $create_customer['address_city'],
            'address_town' => $create_customer['address_town'],
            'address_build' => $create_customer['address_build'],
            'address_name' => $create_customer['address_name'],
            'contact_tel' => $create_tel
        ]);
        return redirect('/customer/show/'.$customer_id);
    }

    public function address_store(Request $request)
    {
        $customer_address=$request->all();
        //dd($customer_address);
        $create_zip_code=($customer_address['zip_code1']."-".$customer_address['zip_code2']);
        $create_tel=$customer_address['tel1']."-".$customer_address['tel2']."-".$customer_address['tel3'];
        
        $customer_addresss=Customer_address::insertGetId([
            'customer_id' => $customer_address["customer_id"],
            'zip_code' => $create_zip_code,
            'address_pref' => $customer_address['address_pref'],
            'address_city' => $customer_address['address_city'],
            'address_town' => $customer_address['address_town'],
            'address_build' => $customer_address['address_build'],
            'address_name' => $customer_address['address_name'],
            'contact_tel' => $create_tel
        ]);

        return redirect('/customer/show/'.$customer_address["customer_id"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($customer_id)
    {
        $customer=Customer::getJoinAll_show($customer_id);
        $customer_address=Customer_address::getJoinAll_show($customer_id);
        //var_dump($customer_address);
        //dd($customer_address);
        $phone=explode("-", $customer['phone']);
        $mobile_phone=explode("-", $customer['mobile_phone']);
        $zip_code=explode("-", $customer['zip_code']);
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        return view('customer.customer', [
            'customer'=>$customer,
            'customer_address'=>$customer_address,
            'phone'=>$phone,
            'mobile_phone'=>$mobile_phone,
            'zip_code'=>$zip_code,
            'date'=>$date,
             ]);
    }


    public function address_show($customer_id,$id){

        $customer_address=Customer_address::getJoinAll_address_show($customer_id,$id);
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        $tel=explode("-", $customer_address['contact_tel']);
        $zip_code=explode("-", $customer_address['zip_code']);
        $prefs = config('pref');

        return view('customer.customer_address',[
            'customer_address'=>$customer_address,
            'date'=>$date,
            'zip_code'=>$zip_code,
            'tel'=>$tel,
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
        $update_data=$request->all();
        
        
        
        //telの結合処理
        $update_phone=$update_data['phone1']."-".$update_data['phone2']."-".$update_data['phone3'];
        $update_mobilephone=$update_data['mphone1']."-".$update_data['mphone2']."-".$update_data['mphone3'];
        
        $costomer = Customer::where('id',$update_data['id'])->update([
            'family_name' => $update_data['family_name'],
            'first_name' => $update_data['first_name'],
            'birthday'=>$update_data['birthday'],
            'gender'=>$update_data['gender'],
            'family_name_kana'=>$update_data['family_name_kana'],
            'first_name_kana'=>$update_data['first_name_kana'],
            'phone'=>$update_phone,
            'mobile_phone'=>$update_mobilephone,
            'update_time'=>NOW(),
            
        ]);

        return redirect('/customer/show/'.$update_data['id']);
    }

    public function address_update(Request $request){
        $update_data=$request->all();
        $zip_code=($update_data['zip_code1']."-".$update_data['zip_code2']);
        $contact_tel=$update_data['tel1']."-".$update_data['tel2']."-".$update_data['tel3'];
        
        $costomer = Customer_address::where('id',$update_data['id'])->where('customer_id',$update_data['customer_id'])
        ->update([
            'zip_code' => $zip_code,
            'address_pref' => $update_data['address_pref'],
            'address_city' => $update_data['address_city'],
            'address_town' => $update_data['address_town'],
            'address_build' => $update_data['address_build'],
            'address_name' => $update_data['address_name'],
            'contact_tel' => $contact_tel,
        ]);

        return redirect('/customer/show/'.$update_data['customer_id']);
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
