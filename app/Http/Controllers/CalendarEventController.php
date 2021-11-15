<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalendarEvent;
use Madhatter\LaravelFullcalendar\Facades\Calendar;

class CalendarEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        return view('eventcalendar',compact('events','calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function display(){
        return view('addevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = new CalendarEvent;

        $events->title =$request->input('title');
        $events->color= $request->input('color');
        $events->start_date= $request->input('start_date');
        $events->end_date= $request->input('end_date');

        $events->save();

        return(redirect('eventcalendar')->with('success','Event Added'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = CalendarEvent::all();
        return view('displayevent')->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events =CalendarEvent::find($id);
        return view('editform',compact('events','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate ($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = CalendarEvent::find($id);

        $events->title =$request->input('title');
        $events->color= $request->input('color');
        $events->start_date= $request->input('start_date');
        $events->end_date= $request->input('end_date');

        $events->save();

        return redirect('eventcalendar')->with('success','Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events =CalendarEvent::find($id);
        $events->delete();

        return redirect('eventcalendar')->with('success','Data Deleted');
    }
}
