<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCodename extends Model
{
    public function brand()
    {
        return belongsTo('\App\Models\Brand');
    }
}
