<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    protected $table = 'population';

    protected $fillable = [
        'fname', 'lname','mname','cstatus','rstatus','isvoter',
    ];
}
