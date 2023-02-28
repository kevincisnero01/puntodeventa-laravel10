<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Models\Provider;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.index');
    }

    public function create()
    {
        $providers = Provider::get();
        return view('admin.purchase.create',compact('providers'));
    }

    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all);

        foreach($request->product_id as $key)
        {
            $products = [
                'product_id' => $request->product_id[$key],
                'quantity' => $request->quantity[$key],
                'price' => $request->price[$key],
            ];
        }
        $purchase->purchaseDetails()->createMany($products);

        return redirect()->route('admin.purchases.index');
    }

    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        return view('admin.purchase.edit', compact('purchase'));
    }

    public function update(UpdateRequest $request, Purchase $purchase)
    {
        //$purchase->update($request->all);
        //return redirect()->route('admin.purchases.index');
    }

    public function destroy(Purchase $purchase)
    {
        //$purchase->delete();
        //return redirect()->route('admin.purchases.index');
    }
}
