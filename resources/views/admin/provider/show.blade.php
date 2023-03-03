@extends('layouts.admin')
@section('title','Categoría - Show')
@section('content')

<div class="content-wrapper">

<div class="row justify-content-center">
<div class="col-8" >
    <div class="page-header">
        <h3 class="page-title">
            Mostrar Proveedor
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/providers">Proveedors</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
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
            Detalles de Proveedor
        </p>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el nombre" disabled value="{{ $provider->name }}">
            @error('name') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa el correo electronico" disabled value="{{ $provider->email }}">
            @error('email') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="rif">RIF</label>
            <input type="text" class="form-control" id="rif" name="rif" placeholder="Ingresa el RIF" disabled value="{{ $provider->rif }}">
            @error('rif') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingresa el telefono" disabled value="{{ $provider->rif }}">
            @error('rif') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
        </div>

        <div class="form-group">
            <label for="address">Dirección</label>
            <textarea class="form-control" id="address" name="address" rows="4" placeholder="Ingrese una descripción" disabled>{{ $provider->address }}</textarea>
            @error('address') <span class="form-group label text-danger mt-2">{{ $message}}</span>@enderror
        </div>

        <a href="{{ route('admin.providers.index') }}" class="btn btn-lg btn-block btn-secondary mr-2">Atras</a>
        </form>
        </div>
    </div>
</div>
</div>

</div><!--content-wrapper-->

@endsection