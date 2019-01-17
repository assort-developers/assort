<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('customer/customer_search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('customer/customer');
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
    }

    public function search_api_customer_name(Request $request){
        // dd($request->customer_name);
        $customer_id = DB::table('customer')->select('id')->where('family_name', 'LIKE', "%$request->customer_name%")
        ->orWhere('first_name', 'LIKE', "%$request->customer_name%")
        ->get();

        $customer_address = [];
        if(count($customer_id) == 1){
            $customer_address = DB::table('customer_address')->where('customer_id', '=', $customer_id[0]->id)->get();
        }
        foreach($customer_address as $idx =>  $add){
            $zip = explode('-', $add->zip_code);
            $customer_address[$idx]->zip1 = $zip[0];
            $customer_address[$idx]->zip2 = $zip[1];
            $customer_address[$idx]->pref_print = config('pref')[$add->address_pref];
        }
        return [
            'customer_id' => $customer_id,
            'cusomter_address' => $customer_address,
        ];
    }
}
