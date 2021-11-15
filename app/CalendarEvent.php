<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $table = 'calendarevents';

    protected $fillable =['title','color','start_date','end_date'];
}
