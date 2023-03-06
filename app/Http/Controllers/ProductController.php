<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        $providers = Provider::pluck('name','id');

        return view('admin.product.create', compact('categories','providers'));
    }

    public function store(StoreRequest $request)
    {   
        //SAVE IMAGE
        if($request->hasFile('image'))
        {
            $filename =  time().'.'.$request->image->guessExtension();
            $request->image->storeAs('/products', $filename,'image');
        }
        //GENERATE CODE
        $last_product = Product::latest('id')->first();
        $code = $last_product->id + 1;
        //SAVE PRODUCT
        $product = Product::create($request->all()+[
            'code' => $code,
            'image' => $filename,
        ]);

        return redirect()->route('admin.products.index')->with('info','Producto registrado con exito.');
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
