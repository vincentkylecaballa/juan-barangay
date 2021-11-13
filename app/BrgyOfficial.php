<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrgyOfficial extends Model
{
    protected $table = 'brgyofficials';

    protected $fillable = [
        'fname', 'lname','mname','position','bstatus',
    ];
}
