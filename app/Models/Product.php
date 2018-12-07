<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_codename()
    {
        return belongsTo('\App\Models\ProductCodename');
    }
}
