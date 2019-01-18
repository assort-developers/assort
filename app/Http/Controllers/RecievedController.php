<?php

namespace App\Http\Controllers;
use DB;

use \DateTimeImmutable;
use Illuminate\Http\Request;
use \App\Models\Recieved;
use \App\Models\RecievedContent;

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
            $recieved_list = Recieved::all();


        }else if($request->staff_name != NULL){
            $recieved_list = Recieved::all();

        }else if($request->recieved_code != NULL){
            $recieved_list = Recieved::select()->where('id', '=', $request->recieved_code)->get();

        }
        return view("Recieved/recieved_search", [
            "recieved_list" => $recieved_list
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
    public function content_create($id){
        $recieved = Recieved::find($id);
        //dd($recieved);
        return view('Recieved/content_create',[
            'recieved' => $recieved,
        ]);
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
        //dd($request);
        $tel = $request->tel1."-".$request->tel2."-".$request->tel3;
        $zip_code = $request->address_code1."-".$request->address_code2;
       $recieved= Recieved::insertGetId([
            'customer_id'=> intval($request->customer_id),
            'customer_address_id' => intval($request->customer_address_id),
            'shipment_charge' => intval($request->shipment_charge),

        //     'mail' => $request ->mail,
        //     'price' => $request ->price,
        //     'pay' => $request ->pay,
        //    'staff_name' => $request->staff_name,
        //     'code' => $request ->code,
        //     'tel' => $tel,
        //     'address_code' => $address_code,
        //     'ken' => $request ->ken,
        //     'town' => $request ->town,
        //     'number' => $request ->number,
        //     'builld' => $request ->builld,
        //     'update_day' => NOW(),
        ]);
        return redirect('/Recieved/'.$recieved.'/content_create');
    }
    public function content_store($id, Request $request)
    {   $recieved_content = json_decode($request->order_content);
        //dd($recieved_content);
        foreach($recieved_content as $idx => $content){
            foreach($content as $product_id => $quantity){
                $row = new RecievedContent;
                $row->recieved_id = intval($id);
                $row->product_id = intval($product_id);
                $row->quantity = $quantity;
                $row->shipment_status = 0;
                $row->shipment_date = null;
                $row->save();
                break;
            }
        }
        return redirect('/Recieved_search');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
        $recieved = Recieved::find($id);
        $recieved_contents = RecievedContent::select()->where('recieved_id', '=', $id)
        //->join('product','recieved_content.product_id', '=', 'product.id')
        //->join('product_codename', 'product.product_codename_id', '=', 'product_codename.id')
        ->get();
        //dd($recieved_contents);
        $total_price = $recieved->shipment_charge;
        foreach($recieved_contents as $content){
            $total_price += $content->price;
        }
        return view("Recieved/recieved",[
            "recieved" => $recieved,
            "recieved_contents" => $recieved_contents,
            "total_price" => $total_price
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
        DB::beginTransaction();
        try{
            $id = $request->id;
            $contents = RecievedContent::select()->where('recieved_id', '=', $id)->get();
            foreach($contents as $content){
                $content->shipment_status = 1;
                $content->shipment_date = now();
                $content->save();
            }


            DB::commit();
        }catch(\PDOException $e){
            DB::rollback();
            return 'やばいよ';
        }
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
