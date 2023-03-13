@extends('layouts.admin')
@section('title','Cliente | Editar')
@section('content')

<div class="content-wrapper">

<div class="row justify-content-center">
<div class="col-8" >
    <div class="page-header">
        <h3 class="page-title">
            Editar Cliente
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.clients.index') }}">Clientes</a></li>
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
            Detalles del cliente.
        </p>
        {!! Form::model($client, ['route' => ['admin.clients.update', $client->id],'method' => 'put']) !!}
        
            @include('admin.client._form')

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