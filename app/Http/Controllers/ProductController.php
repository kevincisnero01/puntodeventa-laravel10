<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index');
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(StoreRequest $request)
    {
        Product::create($request->all);
        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $product->update($request->all);
        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
