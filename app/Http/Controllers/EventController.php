<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\WorkShop;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::select('events.*','workshops.*')->join('workshops', 'events.id', '=', 'workshops.event_id')->get();

       // $events = DB::table('events')->join('workshops', 'events.id', '=', 'workshops.event_id');
        return $events;
    }

    public function futureevents()
    {
        $from = date("Y-m-d");
        $data = Event::select('events.*','workshops.*')->join('workshops', 'events.id', '=', 'workshops.event_id')->where('workshops.start','>', $from)->get();
        return $data;
    }
  
}