<?php

namespace App\Http\Controllers;

use App\Models\Children;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $child = Children::query('SELECT child.id
        ,child.name
        ,parent.name
    FROM children AS parent
    LEFT JOIN children AS child ON child.parentid = parent.Id')->get();

        return $child;
    }
  
}