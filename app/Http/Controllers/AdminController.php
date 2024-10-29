<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function showAdminPanel() {
        $categories = Category::all();
        return view('admin', compact('categories'));
    }

    public function storeItem(Request $request) {
        $request->validate([
            'name' => 'required',
            'preview_text' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        Item::create($request->all());

        return redirect('/admin');
    }
}

