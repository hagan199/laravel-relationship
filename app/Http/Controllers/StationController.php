<?php

namespace App\Http\Controllers;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        return Station::with('users','company')->get();
    }

}

