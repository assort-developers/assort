<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCodename extends Model
{
    protected $table = 'product_codename';
    public function brand()
    {
        return belongsTo('\App\Models\Brand');
    }
}
