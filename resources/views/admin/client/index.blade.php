@extends('layouts.admin')
@section('title','Cliente | Listado')
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
        Clientes
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin<a href="#"></a></li>
        <li class="breadcrumb-item active" aria-current="page">Clientes</li>
        </ol>
    </nav>
    </div>
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">Listado de Clientes</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('admin.clients.create') }}" class="btn btn-sm btn-primary"> Crear Cliente </a>
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
                    <th>CI</th>
                    <th>RIF</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->ci }}</td>
                    <td>{{ $client->rif }}</td>
                    <td>{{ $client->email }}</td>

                    <td style="width: 200px;">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                            <a href="{{ route('admin.clients.show', $client->id) }}" class="btn btn-success py-2" title="Ver Cliente">
                                <i class="fas fa-search"></i>
                            </a>

                            <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-info py-2" title="Editar Cliente">
                                <i class="fas fa-pen"></i>
                            </a>

                            <form id="formDelete" action="{{ route('admin.clients.destroy',$client->id) }}" method="post" 
                                onclick="return confirm('¿Quiere Eliminar el registro?')" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger py-2 rounded-r" ><i class="fas fa-eraser h-20"  ></i></button>
                            </form>

                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example"></div>
                        
    
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