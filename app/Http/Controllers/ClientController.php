<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('admin.client.index', compact('clients'));
    }

    public function create()
    {   
        $disabled = '';
        return view('admin.client.create', compact('disabled'));
    }

    public function store(StoreRequest $request)
    {
        Client::create($request->all());
        return redirect()->route('admin.clients.index')->with('info','Producto registrado con exito.');
    }

    public function show(Client $client)
    {
        $disabled = 'disabled';
        return view('admin.client.show', compact('client','disabled'));
    }

    public function edit(Client $client)
    {
        $disabled = '';
        return view('admin.client.edit', compact('client','disabled'));
    }

    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('admin.clients.edit', $client->id);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index');
    }
}
