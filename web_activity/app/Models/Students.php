<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Activity 2: Add new user
class Students extends Model
{
    protected $table = 'students';
    protected $fillable = ['name', 'age', 'gender'];
}