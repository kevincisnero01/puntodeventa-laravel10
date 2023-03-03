@extends('layouts.admin')
@section('title','Proveedor | Editar')
@section('content')

<div class="content-wrapper">

<div class="row justify-content-center">
<div class="col-8" >
    <div class="page-header">
        <h3 class="page-title">
            Editar Proveedor
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/providers">Proveedors</a></li>
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
            Actualizar los datos de un proveedor.
        </p>
        <form action="{{ route('admin.providers.update',$provider->id) }}" method="post">
        @csrf
        @method('put')
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre" value="{{ old('name',$provider->name) }}">
            @error('name') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electronico. Ej: correo@dominio.com" value="{{ old('email',$provider->email) }}">
            @error('email') <div class="form-group label text-danger mt-2">{{ $provider->message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="rif">RIF</label>
            <input type="text" class="form-control" id="rif" name="rif" placeholder="Ingrese el RIF. Ej: xxxxxxxxxx" value="{{ old('rif',$provider->rif) }}">
            @error('rif') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese el telefono. Ej: xxx-xxxxxxx" value="{{ old('name',$provider->phone) }}">
            @error('phone') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <textarea class="form-control" id="address" name="address" rows="4" placeholder="Ingrese una dirección">{{ old('address',$provider->address) }}</textarea>
            @error('address') <span class="form-group label text-danger mt-2">{{ $message}}</span>@enderror
        </div>

        <button type="submit" class="btn btn-lg btn-block btn-primary mr-2">Actualizar</button>

        </form>
        </div>
    </div>
</div>
</div>

</div><!--content-wrapper-->

@endsection