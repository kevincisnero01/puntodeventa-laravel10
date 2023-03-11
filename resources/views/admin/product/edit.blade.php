@extends('layouts.admin')
@section('title','Producto | Editar')
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

<div class="row justify-content-center">
<div class="col-8" >
    <div class="page-header">
        <h3 class="page-title">
            Editar Producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Productos</a></li>
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
            Actualizar datos del producto.
        </p>
        {!! Form::model($product, ['route' => ['admin.products.update', $product->id],'method' => 'put', 'files' => true]) !!}

            @include('admin.product._form')

            {!! Form::submit('Actualizar', ['class' => 'btn btn-lg btn-block btn-primary mt-2']) !!}

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