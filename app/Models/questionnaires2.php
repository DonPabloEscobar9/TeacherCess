<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionnaires2 extends Model
{
    use HasFactory;
    protected $table ='questionnaire2';
    protected $fillable = [
        'name',
        'email',
        'year',
        'excellent',
        'verygood',
        'good',
        'average',
        'poor',
    ];
}
