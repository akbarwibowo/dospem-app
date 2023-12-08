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
        'concentration_id',
        'question_id',
        'answers',
        'semester',
    ];
}
