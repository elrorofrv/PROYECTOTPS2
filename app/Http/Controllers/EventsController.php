<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Events::all();
        return view('events',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventscreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $events= new Events;
        $events->name=$request->input('name');
        $events->description=$request->input('description');
        $events->ubication=$request->input('ubication');
        $events->fech_inicio=$request->input('fech_inicio');
        $events->fech_final=$request->input('fech_final');
        $events->agends_id=1;
        $events->priorities_id=1;
        $events->statuses_id=1;
        $events->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $events= Events::find($id);
        $events->name=$request->input('name');
        $events->description=$request->input('description');
        $events->ubication=$request->input('ubication');
        $events->fech_inicio=$request->input('fech_inicio');
        $events->fech_final=$request->input('fech_final');
        $events->update();
        return view('larutaespecifica');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $events= Events::find($id);
        $events->delete();
        return view('larutaespecifica');
    }
}
