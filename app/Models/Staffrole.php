<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staffrole extends Model
{
    protected $table = 'staff_role';
    public $timestamps = false;
    protected $guarded = ['id'];
}
