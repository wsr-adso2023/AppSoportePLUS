<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicerequired extends Model
{
    protected $table = 'supports_servicerequired';

    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
