<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // app/Http/Controllers/CategoryController.php
    public function store(Request $request) {
    $cat = \App\Models\Category::create($request->all());
    return response()->json($cat, 201);
    }
}
