@extends('layouts.admin')
@section('title','Producto | Crear')
@section('content')

<div class="content-wrapper">

<div class="row justify-content-center">
<div class="col-8" >
    <div class="page-header">
        <h3 class="page-title">
            Crear Producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="/providers">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear</li>
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
            Registre un nuevo producto.
        </p>
        {!! Form::open(['route' => 'admin.products.store']) !!}
        
            <div class="form-group">
                {!! Form::label('name','Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre.']) !!}
                @error('name') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
            </div>

            <div class="form-group">
                {!! Form::label('sell_price','Precio de Venta') !!}
                {!! Form::number('sell_price', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el precio de venta.']) !!}
                @error('sell_price') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id','Categoria') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' =>'Seleccione una categoría.']) !!}
                @error('category_id') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
            </div>

            <div class="form-group">
                {!! Form::label('provider_id','Proveeder') !!}
                {!! Form::select('provider_id', $providers, null, ['class' => 'form-control', 'placeholder' =>'Seleccione un proveedor.']) !!}
                @error('provider_id') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
            </div>

            <div class="card">
            <div class="card-body">
                {!! Form::label('image','Imagen') !!}
                <input type="file" name="image" id="image" class="dropify"  />
            </div>
            </div>
            
            {!! Form::submit('Registrar', ['class' => 'btn btn-lg btn-block btn-primary mr-2']) !!}

        {!! Form::close() !!}
        </div>
    </div>
</div>
</div>

</div><!--content-wrapper-->

@endsection

@section('scripts')
    <script src="/melody/js/dropify.js"></script>
@endsection