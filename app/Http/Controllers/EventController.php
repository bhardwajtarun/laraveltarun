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
        $events = DB::table('events')->join('workshops', 'events.id', '=', 'workshops.event_id');
        return $events;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  \
}