<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Carbon\Carbon;

class StaffController extends Controller
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
        $staffs=Staff::getJoinAll($request);
        $now=Carbon::today()->toDateString();
        return view('staff.staff_search', [
            'prefs'=>$prefs,
            'request'=>$request,
            'staffs'=>$staffs,
            'now'=>$now
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
    public function show($staff_id)
    {
        //$staff = Staff::where('id',$staff_id)->first();
        //$staff_updateby=Staff::where('id',$staff->updateby)->first();
        $staff2=Staff::getJoinAll_show($staff_id);
        $tel=explode("-", $staff2['contact_tel']);
        $zip_code=explode("-", $staff2['zip_code']);
        $date = date_create(NOW()); 
        $date = date_format($date , 'Y-m-d');
        $prefs = config('pref');
        
        return view('staff.staff', [
            //'staff' => $staff,
            //'staff_updateby'=>$staff_updateby,
            
            'staff2'=>$staff2,
            'tel'=>$tel,
            'zip_code'=>$zip_code,
            'date'=>$date,
            'prefs'=>$prefs,
            
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
    public function update(Request $request, $id)
    {
        return redirect('/staff/show/'.$staff_id);
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
