<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

	public function getAge($birthday) {
		$dob = Carbon::parse($birthday);
		$age = $dob->age;
		return $age;
	}

	public static function getJoinAll_show($request=null){
		$staff = Staff::select(
			'staff.id',
			'staff.code',
			'staff.family_name',
			'staff.first_name',
			'staff.family_name_kana',
			'staff.first_name_kana',
			'staff.birthday',
			'staff.zip_code',
			'staff.address_pref',
			'staff.address_city',
			'staff.address_town',
			'staff.address_build',
			'staff.mail_address',
			'staff.contact_tel',
			'staff.hiredate',
			'staff2.family_name as updateby_family_name',
			'staff2.first_name as updateby_first_name',
			'staff.update',
			'staff_role.id as staff_role_id',
			'staff_role.name as staff_role'
		)->leftjoin('staff_role', 'staff.staff_role_id', '=', 'staff_role.id')
		->leftjoin('staff as staff2', 'staff.updateby', '=', 'staff2.id');
		//->toSql();
		//dd($staff);
		
		return $staff->first();
	}


	public static function getJoinAll($request=null){
		$staff = Staff::select(
			'staff.id',
			'staff.code',
			'staff.family_name',
			'staff.first_name',
			'staff.family_name_kana',
			'staff.first_name_kana',
			'staff.birthday',
			'staff.zip_code',
			'staff.address_pref',
			'staff.address_city',
			'staff.address_town',
			'staff.address_build',
			'staff.mail_address',
			'staff.contact_tel',
			'staff.hiredate',
			'staff2.family_name as updateby_family_name',
			'staff2.first_name as updateby_first_name',
			'staff.update',
			'staff_role.name as staff_role'
		)->leftjoin('staff_role', 'staff.staff_role_id', '=', 'staff_role.id')
		->leftjoin('staff as staff2', 'staff.updateby', '=', 'staff2.id');
		//->toSql();
		//dd($staff);
		
		//return(var_dump($staff));
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
