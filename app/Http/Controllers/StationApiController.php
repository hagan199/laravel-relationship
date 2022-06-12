<?php

namespace App\Http\Controllers;
use App\Models\Station;
use Illuminate\Http\Request;

class StationApiController extends Controller
{
    public function index()
    {
        return Station::all();
    }

}
