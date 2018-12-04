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

	public static function getJoinAll_show($staff_id=null){
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
			'staff.resigndate',
			'staff2.family_name as updateby_family_name',
			'staff2.first_name as updateby_first_name',
			'staff.update',
			'staff_role.id as staff_role_id',
			'staff_role.name as staff_role'
		)->leftjoin('staff_role', 'staff.staff_role_id', '=', 'staff_role.id')
		->leftjoin('staff as staff2', 'staff.updateby', '=', 'staff2.id')
		->where('staff.id', '=', $staff_id);
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
			'staff.resigndate',
			'staff2.family_name as updateby_family_name',
			'staff2.first_name as updateby_first_name',
			'staff.update',
			'staff_role.id as staff_role_id',
			'staff_role.name as staff_role'
		)->leftjoin('staff_role', 'staff.staff_role_id', '=', 'staff_role.id')
		->leftjoin('staff as staff2', 'staff.updateby', '=', 'staff2.id');
		//->toSql();
		//dd($staff);
		
		//return(var_dump($staff));
		//dd($staff_name);

		if($request->staff_code != NULL) $staff->where('staff.code', '=', $request->staff_code);
		if($request->staff_role_id != NULL) $staff->where('staff_role.id', '=', $request->staff_role_id);
		if($request->family_name != NULL) $staff->where('staff.family_name', 'LIKE', "%$request->family_name%");
		if($request->first_name != NULL) $staff->where('staff.first_name', 'LIKE', "%$request->first_name%");
		if($request->family_name_kana != NULL) $staff->where('staff.family_name_kana', 'LIKE', "%$request->family_name_kana%");
		if($request->first_name_kana != NULL) $staff->where('staff.first_name_kana', 'LIKE', "%$request->first_name_kana%");
		if($request->hiredate_from != NULL){
			$staff->whereDate('staff.hiredate', '>=',$request->hiredate_from);
		}
		if($request->hiredate_to != NULL){
			$staff->whereDate('staff.hiredate','<=',  $request->hiredate_to);
		}
		if($request->resigndate_from != NULL){
			$staff->whereDate('staff.resigndate', '>=',$request->resigndate_from);
		}
		if($request->resigndate_to != NULL){
			$staff->whereDate('staff.resigndate','<=',  $request->resigndate_to);
		}
		
		return $staff->get();
	}


}
