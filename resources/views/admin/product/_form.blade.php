<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre.',$disabled]) !!}
    @error('name') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('sell_price','Precio de Venta') !!}
    {!! Form::number('sell_price', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el precio de venta.',$disabled]) !!}
    @error('sell_price') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('category_id','Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' =>'Seleccione una categoría.',$disabled]) !!}
    @error('category_id') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('provider_id','Proveeder') !!}
    {!! Form::select('provider_id', $providers, null, ['class' => 'form-control', 'placeholder' =>'Seleccione un proveedor.',$disabled]) !!}
    @error('provider_id') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="card">
<div class="card-body">

    {!! Form::label('image','Imagen') !!}
    <input type="file" name="image" id="image" class="dropify" {{ $disabled }}
        @isset($product->image) data-default-file="/images/{{$product->image}}" @endisset  
    />
    @error('image') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>
</div>