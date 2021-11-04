<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;


class EventController extends Controller
{
    public function AddEvent() {
        return view('calendar');
    }

    public function store(Request $request)
    {
        $schedulevent = new Event();
        $schedulevent->title = $request->get('title');
        $schedulevent->event_start_date = $request->get('startdate');
        $schedulevent->event_end_date = $request->get('enddate');
        $schedulevent->save();
        return redirect('event')->with('success', 'Event has been added');
    }

    public function calender()
    {
        $schedulevents = [];
        $data = Event::all();
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $schedulevents[] = Calendar::schedulevent(
                    $value->title,
                    true,
                    new \DateTime($value->event_start_date),
                    new \DateTime($value->event_end_date . '+1 day'),
                    null,
                    // Add color
                    [
                        'color' => '#3d3d3d',
                        'textColor' => '#008000',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($schedulevents);
        return view('calendar', with('calendar', $calendar));
    }
}


