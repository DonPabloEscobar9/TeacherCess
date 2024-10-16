<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professionals1 extends Model
{
    use HasFactory;
    protected $table ='professional1';
    protected $fillable = [
        'name',
        'email',
        'year',
        'question',
        'answer',
    ];
}
