<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosticreports extends Model
{
    protected $table = 'supports_diagnosticreports';

    use HasFactory;

    protected $fillable = [
        
    ];

    public function number(){

        return $this->belongsTo(Support::class,'request_id');
    }

    public function product1()
{
    return $this->belongsTo(Product::class, 'product1');
}

public function product2()
{
    return $this->belongsTo(Product::class, 'product2');
}

public function product3()
{
    return $this->belongsTo(Product::class, 'product3');
}
}
