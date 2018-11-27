<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    public $timestamps = false;
    protected $guarded = ['id'];


    public function getStaffDate()
	{
		$date = new DatetimeImmutable($this->staff_date);
		return $date->format('Y-m-d');
	}

	public function getPrefName() {
		return config('pref.'.$this->address_pref);
	}

	public static function getJoinAll($request=null){
		$staff = Staff::select(
			'staff.id',
			'staff.code',
			'staff.family_name',
			'staff.first_name',
			'staff.address_pref',
			'staff.address_city',
			'staff.address_town',
			'staff.address_build',
			'staff.mail_address',
			'staff.contact_tel',
			'staff.hiredate',
			'staff.update',
			'staff_role.name as staff_role'
		)->leftjoin('staff_role', 'staff.staff_role_id', '=', 'staff_role.id');
		
		//->toSql();
		//dd($staff);
		
		
		//dd($staff_name);

		if($request->staff_code != NULL) $staff->where('staff.code', '=', $request->staff_code);
		if($request->staff_name != NULL) $staff->where('staff.name', 'LIKE', "%$request->staff_name%");
		
		/* 検索項目は後から誰かが考えよう
			for($i=0;$i<count($staff_name);$i++){
			if($i=0&$staff_name[$i] != NULL){ $staff->where('staff_family_name', 'LIKE', "%$staff_name[$i]%");}
			else {$staff->where('staff_first_name', 'LIKE', "%$staff_name[$i]%");}
		} */
		return $staff->get();
	}


}
