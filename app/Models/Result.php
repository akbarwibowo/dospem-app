<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'result';
    protected $primaryKey = 'result_id';

    protected $fillable = [
        'user_id',
        'answers',
        'semester',
        'major',
    ];
}
