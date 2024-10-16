<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dispositions1 extends Model
{
    use HasFactory;
    protected $table ='disposition1';
    protected $fillable = [
        'name',
        'email',
        'year',
        'question',
        'answer',
    ];
}
