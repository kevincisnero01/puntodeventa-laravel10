@extends('layouts.admin')
@section('title','Categoria - Create')
@section('content')

<div class="content-wrapper">

<div class="row justify-content-center">
<div class="col-8" >
    <div class="page-header">
        <h3 class="page-title">
            Editar Categoría
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categorias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <p class="card-description">
            Edite la información de la categoría
        </p>
        <form action="{{ route('admin.categories.update',$category->id) }}" method="post" class="forms-sample">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" placeholder="Ingresa el nombre">
                @error('name') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Ingrese una descripción">{{ $category->description }}</textarea>
                @error('description') <span class="form-group label text-danger mt-2">{{ $message}}</span>@enderror
            </div>

            <button type="submit" class="btn btn-lg btn-block btn-primary mr-2">Actualizar</button>
        </form>
        </div>
    </div>
</div>
</div>

</div><!--content-wrapper-->

@endsection