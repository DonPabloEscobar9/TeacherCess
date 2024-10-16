<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reject extends Model
{
    use HasFactory;
    protected $table ='rejects';
    protected $fillable = [
        'name',
        'email',
        'year',
        'email2',
    ];
}
