<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = 'supports';

    protected $fillable = [
        'numerosolicitud',

    ];

    public function state(){

        return $this->belongsTo(StatesSupport::class,'state_id');
    }

    public function customer(){

        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function customer_id(){

        return $this->belongsTo(Customer::class,'customer_id');
    }
}
