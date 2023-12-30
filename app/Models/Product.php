<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'supplier_id',
        'date',
        'stock',
        'precio_venta'
    ];

    public function suppliers()
{
    return $this->belongsTo(Supplier::class,'supplier_id');
}

}
