<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Population;
use App\BrgyOfficial;
use App\CalendarEvent;
use Madhatter\LaravelFullcalendar\Facades\Calendar;

class HomeController extends Controller
{
    public function index(){

        $brgy = BrgyOfficial::all();
        $pop = Population::all();

        //$count = Population::all('fname')->get()->count();
        $count = Population::where("isvoter","YES")->count();
        $count1 = Population::count(); 
        
        $events = CalendarEvent::all();
        $event =[];

        foreach($events as $row){
            $enddate = []; $row->end_date. "24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                true,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date. '+1 day'),
                $row->id,
                [
                    'color' => $row->color,
                ]
            );
        }

        $calendar =\Calendar::addEvents($event);

        return view('home')->with('brgy',$brgy)
        ->with('pop',$pop)
        ->with('count',$count)
        ->with('count1',$count1)
        ->with('events',$events);
    }
}
