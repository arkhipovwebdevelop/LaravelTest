<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category; // Assuming your model for categories is named Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $query = Category::query();


        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $categories = $query->get(['id', 'name']);

        return response()->json([
            'categories' => $categories,
        ]);
    }
}

