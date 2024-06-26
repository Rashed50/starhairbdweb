<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductName extends Model
{
    use HasFactory;
    protected $table = 'product_names';
    protected $primaryKey = 'product_name_id';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(ProductType::class, 'product_type_id', 'product_type_id');
    }
}
