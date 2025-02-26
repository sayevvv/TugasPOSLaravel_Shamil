<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('products', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $products = $category->products;
        return view('product', compact('category', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
        ]);
        $category->update($request->all());
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null, 204);
    }
    public function foodBeverage()
    {
        $category = Category::where('name', 'Food-Beverage')->firstOrFail();
        $products = $category->products;
        return view('product', compact('category', 'products'));
    }

    public function beautyHealth()
    {
        $category = Category::where('name', 'Beauty-Health')->firstOrFail();
        $products = $category->products;
        return view('product', compact('category', 'products'));
    }

    public function homeCare()
    {
        $category = Category::where('name', 'Home-Care')->firstOrFail();
        $products = $category->products;
        return view('product', compact('category', 'products'));
    }

    public function babyKid()
    {
        $category = Category::where('name', 'Baby-Kid')->firstOrFail();
        $products = $category->products;
        return view('product', compact('category', 'products'));
    }
}
