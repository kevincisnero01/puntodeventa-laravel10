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
            <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Productos</a></li>
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
        {!! Form::open(['route' => 'admin.products.store','files' => true]) !!}
        
            @include('admin.product._form')

            {!! Form::submit('Registrar', ['class' => 'btn btn-lg btn-block btn-primary mt-2']) !!}

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