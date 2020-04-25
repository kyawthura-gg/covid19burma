<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'source_image', 'details', 'source', 'source_link', 'source_date',
    ];
}
