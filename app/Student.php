<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
    public $primaryKey ='stud_id';
    public $timestamps = true;
}

