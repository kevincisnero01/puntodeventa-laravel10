@extends('layouts.admin')
@section('title','Compras')
@section('content')

<div class="content-wrapper">
    @if(session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Mensje:</strong> {{ session('info')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="page-header">
    <h3 class="page-title">
        Compras
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin<a href="#"></a></li>
        <li class="breadcrumb-item active" aria-current="page">Compras</li>
        </ol>
    </nav>
    </div>
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">Listado de Compras</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('admin.purchases.create') }}" class="btn btn-sm btn-primary"> Crear Compra </a>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="table-responsive-sm">
            <table id="order-listing" class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Esado</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->purchase_date }}</td>
                    <td>{{ $purchase->total }}</td>
                    <td>{{ $purchase->status }}</td>
                    <td style="width: 130px;">
                        <a href="{{ route('admin.purchases.edit', $purchase->id) }}" class="btn btn-sm btn-info inline-block mr-1"><i class="fas fa-pen"></i></a>
                        
                        <form action="{{ route('admin.purchases.destroy',$purchase->id) }}" method="post" 
                            onclick="return confirm('¿Quiere Eliminar el registro?')" class="inline" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger inline-block"><i class="fas fa-eraser"></i></button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection