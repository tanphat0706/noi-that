<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image',
        'description',
        'created_at',
        'updated_at',
    ];
}
