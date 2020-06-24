<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "infomation";
    public $fillable = [
        "student_name",
        "student_email",
        "phone",
        "feedback"
    ];
}
