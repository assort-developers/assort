<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waste extends Model
{
    protected $table = 'waste_table';
    public function brand()
    {
        return belongsTo('\App\Models\Brand');


    }
}
