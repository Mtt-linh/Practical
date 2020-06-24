<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "information";
    public $fillable = [
        "student_name"
    ];
}
