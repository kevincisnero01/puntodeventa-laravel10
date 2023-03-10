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
        $disabled = '';
        return view('admin.product.create', compact('categories','providers','disabled'));
    }

    public function store(StoreRequest $request)
    {   
        //GET DATA
        $data = $request->all();

        //SAVE IMAGE
        if($request->hasFile('image'))        {
            $data['image'] = $request->image->store('/','images');
        }

        //GENERATE CODE
        $lastest_product = Product::latest('id')->first();
        $data['code'] = $lastest_product->id + 1;

        //CREATE PRODUCT
        $product = Product::create($data);

        return redirect()->route('admin.products.index')->with('info','Producto registrado con exito.');
    }

    public function show(Product $product)
    {   
        $categories = Category::pluck('name','id');
        $providers = Provider::pluck('name','id');
        $disabled = 'disabled';
        return view('admin.product.show', compact('product','categories','providers','disabled'));
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
