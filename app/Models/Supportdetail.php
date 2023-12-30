<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supportdetail extends Model
{
    protected $table = 'supports_detail';

    use HasFactory;

    protected $fillable = [
        'description',
        'brand',
        'model',
        'serialnumber',
        'observation'
    ];
}
