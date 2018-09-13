<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $table = 'employees';

    protected $fillable = [
        'emp_id', 'first_name', 'last_name', 'middle_name', 'birthdate', 'address', 'job', 'contact',
    ];
}
