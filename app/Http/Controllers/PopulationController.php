<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Population;


class PopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pop = Population::all();
        return view('population')->with('pop',$pop);
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

        $pop = new Population;

        $pop->fname =$request->input('fname');
        $pop->lname =$request->input('lname');
        $pop->mname =$request->input('mname');
        $pop->cstatus =$request->input('cstatus');
        $pop->rstatus =$request->input('rstatus');
        $pop->isvoter =$request->input('isvoter');  

        $pop->save();

        return redirect('/population');
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

        $pop = Population::find($id);

        $pop->fname =$request->input('fname');
        $pop->lname =$request->input('lname');
        $pop->mname =$request->input('mname');
        $pop->cstatus =$request->input('cstatus');
        $pop->rstatus =$request->input('rstatus');
        $pop->isvoter =$request->input('isvoter');  

        $pop->save();

        return redirect('/population');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pop = Population::find($id);
        $pop->delete();

        return redirect('/population');
    }
}
