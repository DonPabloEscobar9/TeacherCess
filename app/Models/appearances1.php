<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appearances1 extends Model
{
    use HasFactory;
    protected $table ='appearance1';
    protected $fillable = [
        'name',
        'email',
        'year',
        'question',
        'answer',
    ];
}
