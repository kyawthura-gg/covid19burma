<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'title', 'details', 'source', 'source_link', 'source_date',
    ];
}
