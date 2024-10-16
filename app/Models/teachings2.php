<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachings2 extends Model
{
    use HasFactory;
    protected $table ='teaching2';
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
