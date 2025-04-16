<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with([
            'category' => function ($query) {
                $query->select('id', 'name');
            }
        ])
            ->select('id', 'name', 'price', 'stock', 'category_id', 'created_at')
            ->latest()
            ->paginate(10);

        $products = Product::simplePaginate(10);

        // Get categories with product counts for the category section
        $categories = Category::withCount('products')
            ->orderBy('name')
            ->get(['id', 'name', 'description']);

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get(['id', 'name']);
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Load category name with the product
        $product->load([
            'category' => function ($query) {
                $query->select('id', 'name');
            }
        ]);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get(['id', 'name']);
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($validated);

        return redirect()->route('products.show', $product)
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
    
    public function byCategory(Category $category)
    {
        $products = Product::where('category_id', $category->id)
            ->with([
                'category' => function ($query) {
                    $query->select('id', 'name');
                }
            ])
            ->select('id', 'name', 'price', 'stock', 'category_id', 'description')
            ->latest()
            ->paginate(12);

        return view('products.by_category', compact('products', 'category'));
    }
}