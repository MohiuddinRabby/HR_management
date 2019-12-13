<?php

namespace App;

use App\Department;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    // public function leave()
    // {
    //     return $this->belongsTo('App\LeaveApplication');
    // }
}
