<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatesSupport extends Model
{
    protected $table = 'supports_states';

    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
