<?php

namespace App\Http\Controllers;
use DB;

use \DateTimeImmutable;
use Illuminate\Http\Request;

class RecievedController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
    {
        //dd($request);
        if ($request->recieved_code == NULL && $request->staff_name == NULL) {
            $recieved = DB::select("SELECT * FROM recieved");


        }else if($request->staff_name == NULL){
            $recieved = DB::select("SELECT * FROM recieved WHERE code = '$request->recieved_code'");

        }else if($request->recieved_code == NULL){
            $recieved = DB::select("SELECT * FROM recieved WHERE staff_name = '$request->staff_name'");

        }else{
            $recieved = DB::select("SELECT * FROM recieved WHERE staff_name = '$request->staff_name'and code = '$request->recieved_code'");

        }
        foreach($recieved as $idx => $res){
            $date = new DatetimeImmutable($res->update_day);
            $recieved[$idx]->update_day =  $date->format('Y-m-d');
        }
        return view("recieved/recieved_search", [
            "recieved" => $recieved
        ]);


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('Recieved/recieved_register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
        $tel = $request->tel1."-".$request->tel2."-".$request->tel3;
        $address_code = $request->address_code1."-".$request->address_code2;
        DB::table('recieved')->insert([
            'order_day' => $request ->order_day,
            'shipment_day' => $request ->shipment_day,
            'mail' => $request ->mail,
            'price' => $request ->price,
            'pay' => $request ->pay,
           'staff_name' => $request->staff_name,
            'code' => $request ->code,
            'tel' => $tel,
            'address_code' => $address_code,
            'ken' => $request ->ken,
            'town' => $request ->town,
            'number' => $request ->number,
            'builld' => $request ->builld,
            'update_day' => NOW(),
            'custmer_address_id' =>1
        ]);
        return redirect('/recieved_search');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
        $recieved = DB::select("SELECT * FROM recieved WHERE id = $id");
        $tel=explode("-", $recieved[0]->tel);
        $address_code=explode("-", $recieved[0]->address_code);
        return view("recieved/recieved",[
            "recieved" => $recieved[0],
            "tel" => $tel,
            "address_code" => $address_code
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
        $tel = $request->tel1."-".$request->tel2."-".$request->tel3;
        $address_code = $request->address_code1."-".$request->address_code2;
        DB::table('recieved')->where('id','=',intval($request->id))->update([
            'shipment_day' => $request ->shipment_day,
            'mail' => $request ->mail,
            'price' => $request ->price,
            'pay' => $request ->pay,
            'staff_name' => $request->staff_name,
            'tel' => $tel,
            'address_code' => $address_code,
            'ken' => $request ->ken,
            'town' => $request ->town,
            'number' => $request ->number,
            'builld' => $request ->builld,
            'update_day' => NOW()
        ]);
        return redirect('/recieved/show/'.$request->id);
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
