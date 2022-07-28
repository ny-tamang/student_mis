<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeInfo extends Model
{
    //
    protected $fillable = [
        'student_id',
        'faulty_id',
        'batch_id',
        'semester_id',
        'tu_reg_no',
        'symbol_no'


    ];
}
