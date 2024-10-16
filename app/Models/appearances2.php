<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appearances2 extends Model
{
    use HasFactory;
    protected $table ='appearance2';
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
