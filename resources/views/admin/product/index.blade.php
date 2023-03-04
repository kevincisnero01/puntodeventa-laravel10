@extends('layouts.admin')
@section('title','Producto | Listado')
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
        Productos
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin<a href="#"></a></li>
        <li class="breadcrumb-item active" aria-current="page">Productos</li>
        </ol>
    </nav>
    </div>
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">Listado de Productos</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary"> Crear Producto </a>
            </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="table-responsive-sm">
            <table id="order-listing" class="table">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Categoria</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->status }}</td>
                    <td class="text-uppercase">{{ $product->category->name }}</td>
                    <td style="width: 200px;">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-success" title="Ver Producto">
                                <i class="fas fa-search"></i>
                            </a>

                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info" title="Editar Producto">
                                <i class="fas fa-pen"></i>
                            </a>

                            <button type="submit" form="formDelete" class="btn btn-danger rounded-right" title="Eliminar Producto">
                                <i class="fas fa-eraser"></i>
                            </button>

                            <form id="formDelete" action="{{ route('admin.products.destroy',$product->id) }}" method="post" 
                                onclick="return confirm('¿Quiere Eliminar el registro?')" class="inline" style="display: inline;">
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                        
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

@section('scripts')
    <script src="/melody/js/data-table.js"></script>
@endsection