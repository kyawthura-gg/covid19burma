<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = [
        'state', 'city', 'date_confirm', 'confirm_case', 'deaths', 'recovered'
    ];
}
