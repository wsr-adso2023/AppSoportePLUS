<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporttype extends Model
{

    protected $table = 'supports_types';

    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
