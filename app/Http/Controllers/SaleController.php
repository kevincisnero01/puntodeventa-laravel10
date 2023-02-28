<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sale;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::get();
        return view('admin.sale.index');
    }

    public function create()
    {
        $providers = Client::get();
        return view('admin.sale.create',compact('providers'));
    }

    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all);

        foreach($request->product_id as $key)
        {
            $products = [
                'product_id' => $request->product_id[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key],
            ];
        }
        $sale->purchaseDetails()->createMany($products);

        return redirect()->route('admin.sales.index');
    }

    public function show(Sale $sale)
    {
        return view('admin.sale.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        return view('admin.sale.edit', compact('sale'));
    }

    public function update(UpdateRequest $request, Sale $sale)
    {
        //$sale->update($request->all);
        //return redirect()->route('admin.sales.index');
    }

    public function destroy(Sale $sale)
    {
        //$sale->delete();
        //return redirect()->route('admin.sales.index');
    }
}
