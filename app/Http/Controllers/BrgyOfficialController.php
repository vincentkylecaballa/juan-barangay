<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BrgyOfficial;

class BrgyOfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brgy = BrgyOfficial::all();
        return view('brgyofficers')->with('brgy',$brgy);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
        ]);

        $brgy = new BrgyOfficial;

        $brgy->fname =$request->input('fname');
        $brgy->lname =$request->input('lname');
        $brgy->mname =$request->input('mname');
        $brgy->position =$request->input('position');
        $brgy->bstatus =$request->input('bstatus');

        $brgy->save();

        return redirect('/brgyofficers')->with('success','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
        ]);

        $brgy = BrgyOfficial::find($id);

        $brgy->fname =$request->input('fname');
        $brgy->lname =$request->input('lname');
        $brgy->mname =$request->input('mname');
        $brgy->position =$request->input('position');
        $brgy->bstatus =$request->input('bstatus');

        $brgy->save();

        return redirect('/brgyofficers')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brgy = BrgyOfficial::find($id);
        $brgy->delete();

        return redirect('/brgyofficers')->with('success','Data Deleted');;
    }
}
