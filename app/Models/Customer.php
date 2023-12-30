<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'birthdate',
        'documentype',
        'idnumber',
        'datentry',
        'address',
        'phone',
        'email'
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
