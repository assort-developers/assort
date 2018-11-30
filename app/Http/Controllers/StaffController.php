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
    public function update(Request $request)
    {
        $update_data=$request->all();
        
        //zip_codeの結合処理
        $update_zip_code=($update_data['zip_code1']."-".$update_data['zip_code2']);
        
        //telの結合処理
        $update_tel=$update_data['tel1']."-".$update_data['tel2']."-".$update_data['tel3'];

        $staff = Staff::where('id',$update_data['id'])->update([
            'code' => $update_data['staff_code'],
            'family_name' => $update_data['family_name'],
            'first_name' => $update_data['first_name'],
            'familly_name_kana'=>$update_data['familly_name_kana'],
            'first_name_kana'=>$update_data['first_name_kana'],
            'birthday'=>$update_data['birthday'],
            'zip_code'=>$update_zip_code,
            'address_pref'=>$update_data['address_pref'],
            'address_city'=>$update_data['address_city'],
            'address_town'=>$update_data['address_town'],
            'address_build'=>$update_data['address_build'],
            'contact_tel'=>$update_tel,
            'mail_address'=>$update_data['mail'],
            'hiredate'=>$update_data['hiredate'],
            //staff_roll_idの処理はあとで考える
            'staff_roll_id'=>'1',
            //'staff_id'=>$update_data['staff_id'],
            //'updateby'=>$update_data['updateby'],
            'updateby'=>'1',
            'update'=>NOW(),
        ]);


        
        
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
