<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'id',
        'name',
        'age',
        'gender',
        'address'
    ];

}
