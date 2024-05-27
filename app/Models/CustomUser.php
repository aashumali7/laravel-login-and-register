<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    //1.property
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    use HasFactory;
    //2.constructor

    //3.method
}
