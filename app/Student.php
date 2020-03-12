<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= 'student';
    protected $fillable= ['stu_pre','stu_fname','stu_lname','stu_code','stu_code','stu_groub_id','major_id','fac_id'];
}
