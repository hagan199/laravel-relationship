<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return product::with('station')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string',
            'detail' => 'required|string',
            'station_id' => 'required|numeric'
        ]);
        return Product::create($validated);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'product_name' => 'required|string',
            'detail' => 'required|string',
            'station_id' => 'required|numeric'
        ]);
        $success = $product->update($validated);
        return [
            'success' => $success
        ];
    }

    public function destroy(Product $product)
    {
        $success = $product->delete();
        return [
            'success' => $success
        ];
    }
}
