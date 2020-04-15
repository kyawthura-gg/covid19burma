<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = [
        'case_number', 'age', 'gender',
        'travel_history', 'state', 'city',
        'current_hospital', 'date_confirm', 'description'
    ];
}
