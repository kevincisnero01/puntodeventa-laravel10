@extends('layouts.admin')
@section('title','Cliente | Mostrar')
@section('content')

<div class="content-wrapper">

<div class="row justify-content-center">
<div class="col-12" >
    <div class="page-header">
        <h3 class="page-title">
            {{ $client->name }}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.clients.index') }}">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
            </ol>
        </nav>
    </div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h5> Informacion del Cliente</h5>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <p class="font-weight-bold fa fa-address-book">
                        Nombre
                    </p>
                    <p>{{ $client->name }}</p>
                </div>

                <div class="col-6 form-group">
                    <p class="font-weight-bold  fas fa-map-marker-alt">
                        Dirección
                    </p>
                    <p>{{ $client->address }}</p>
                </div>
            </div><!--row-->
            
            <div class="row">
                <div class="col-6 form-group">
                    <p class="font-weight-bold fa fa-address-card">
                        Cedula
                    </p>
                    <p>{{ $client->ci }}</p>
                </div>

                <div class="col-6 form-group">
                    <p class="font-weight-bold  fa fa-mobile">
                        Telefono
                    </p>
                    <p>{{ $client->tlf }}</p>
                </div>
            </div><!--row-->

            <div class="row">
                <div class="col-6 form-group">
                    <p class="font-weight-bold fa fa-address-card">
                        RIF
                    </p>
                    <p>{{ $client->rif }}</p>
                </div>

                <div class="col-6 form-group">
                    <p class="font-weight-bold  far fa-envelope">
                        Correo
                    </p>
                    <p>{{ $client->email }}</p>
                </div>
            </div><!--row-->
            </div>
        </div>
    </div>
    <div class="col-4 grid-margin stretch-card">
        <div class="card">
        <div class="card-header">
            <h5> Sobre el Cliente</h5>
        </div>
        <div class="card-body">   
            <ul class="list-group">
                <li class="list-group-item"><a href="#"> Historial de Compras </a></li>
            </ul>
        </div><!--body-->
        </div><!--card-->
    </div>
</div>

</div><!--content-wrapper-->

@endsection

@section('scripts')
    <script src="/melody/js/dropify.js"></script>
@endsection