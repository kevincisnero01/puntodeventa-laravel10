<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $categories = Category::pluck('name','id');
        $providers = Provider::pluck('name','id');
        $disabled = '';

        return view('admin.product.edit', compact('product','categories','providers','disabled'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        //RETRIEVING DATA
        $data = $request->except('_token','_method');
        
        if($request->hasFile('image')){
            //GET FILENAMES
            $filename_new = $request->image->getClientOriginalName();
            $filename_old = $product->image;
            //IMAGE WAS CHANGE
            if($filename_new != $filename_old){
                //DELETE IMAGE OLD
                if(Storage::disk('images')->exists($filename_old)){
                    //dd('SI EXISTE');
                    Storage::disk('images')->delete($filename_old);
                }
            }
            //STORE IMAGE 
            $data['image'] = $request->image->store('/', 'images');
            
        }
        //UPDATE ALL DATA
        $product->update($data);

        return redirect()->route('admin.products.edit', $product->id)->with('info','Producto actualizado con exito.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
