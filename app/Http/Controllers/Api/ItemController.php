<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index(Request $request)
    {
        $query = Product::query()->with('category');
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }


        $products = $query->paginate(10)->through(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'preview_text' => $product->preview_text,
                'price' => $product->price,
                'category' => $product->category ? $product->category->name : null,
            ];
        });

        return response()->json([
            'items' => $products->items(),
            'pagination' => [
                'total' => $products->total(),
                'count' => $products->count(),
                'per_page' => $products->perPage(),
                'current_page' => $products->currentPage(),
                'total_pages' => $products->lastPage(),
            ],
        ]);
    }

    // Show a single item by ID
    public function show($id)
    {
        $item = Product::with('category')->find($id);

        if (!$item) {
            return response()->json([
                'error_code' => 404,
                'error_message' => 'Item not found',
            ], 404);
        }

        return response()->json([
            'id' => $item->id,
            'name' => $item->name,
            'preview_text' => $item->preview_text,
            'price' => $item->price,
            'category' => $item->category->name,
        ]);
    }
}

