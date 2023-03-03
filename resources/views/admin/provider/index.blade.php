@extends('layouts.admin')
@section('title','Proveedor')
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
        Proveedores
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin<a href="#"></a></li>
        <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
        </ol>
    </nav>
    </div>
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">Listado de Proveedores</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('admin.providers.create') }}" class="btn btn-sm btn-primary"> Crear Proveedor </a>
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
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($providers as $provider)
                <tr>
                    <td>{{ $provider->id }}</td>
                    <td>{{ $provider->name }}</td>
                    <td>{{ $provider->email }}</td>
                    <td>{{ $provider->address }}</td>
                    <td style="width: 130px;">
                        <a href="{{ route('admin.providers.edit', $provider->id) }}" class="btn btn-sm btn-info inline-block mr-1"><i class="fas fa-pen"></i></a>
                        
                        <form action="{{ route('admin.providers.destroy',$provider->id) }}" method="post" 
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