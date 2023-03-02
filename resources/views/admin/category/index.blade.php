@extends('layouts.admin')
@section('title','Categoria')
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
        Categorias
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin<a href="#"></a></li>
        <li class="breadcrumb-item active" aria-current="page">Categorias</li>
        </ol>
    </nav>
    </div>
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h4 class="card-title">Listado de Categorias</h4>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary"> Crear Categoria </a>
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
                    <th>Descripción</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td style="width: 130px;">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-info inline-block mr-1"><i class="fas fa-pen"></i></a>
                        
                        <form action="{{ route('admin.categories.destroy',$category->id) }}" method="post" 
                            class="inline" onclick="return confirm('¿Quiere Eliminar el registro?')"
                        >
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