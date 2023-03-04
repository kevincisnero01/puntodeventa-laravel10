@extends('layouts.admin')
@section('title','Proveedor | Mostrar')
@section('content')

<div class="content-wrapper">

    <div class="row justify-content-center">
    <div class="col-12" >
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

    <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-lg-4">

                <div class="border-bottom  pb-4 mb-4">
                    <h3>Proveedor</h3>
                </div>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Sobre el Proveedor
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Productos
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Registrar un Producto
                    </a>
                </div>  

            </div>

            <div class="col-lg-8 pl-lg-2">
                <div class="border-bottom pb-4 mb-4">
                    <h3>Informacion del Proveedor</h3>
                    <div class=""></div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">
                                <i class="fa fa-address-card"></i> Nombre
                            </label>
                            <input type="text" class="form-control" id="name" name="name" " disabled value="{{ $provider->name }}">
                        </div>

                        <div class="form-group">
                            <label for="rif" class="font-weight-bold">
                                <i class="fa fa-barcode"></i> RIF
                            </label>
                            <input type="text" class="form-control" id="rif" name="rif" disabled value="{{ $provider->rif }}">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone" class="font-weight-bold">
                                <i class="fa fa-mobile"></i> Telefono
                            </label>
                            <input type="text" class="form-control" id="phone" name="phone"  disabled value="{{ $provider->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">
                                <i class="fa fa-envelope"></i> Correo
                            </label>
                            <input type="email" class="form-control" id="email" name="email" disabled value="{{ $provider->email }}">
                        </div>

                        <div class="form-group">
                            <label for="address" class="font-weight-bold">
                                <i class="fa fa-map"></i>
                                Dirección
                            </label>
                            <textarea class="form-control" id="address" name="address" rows="4" disabled>{{ $provider->address }}</textarea>
                        </div>

                    </div>

                </div>

            </div>


            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.providers.index') }}" class="btn btn-success float-right">Atras</a>
        </div>
        </div>
    </div>
    </div>
{{-- 


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

        

        

        <a href="{{ route('admin.providers.index') }}" class="btn btn-lg btn-block btn-secondary mr-2">Atras</a>
        </div>
    </div>
</div>
</div>
--}}
</div><!--content-wrapper-->

@endsection