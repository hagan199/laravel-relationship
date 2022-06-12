<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        return Product::all();
    }

}
