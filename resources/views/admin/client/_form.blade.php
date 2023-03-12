<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre.',$disabled]) !!}
    @error('name') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('ci','Cédula de Identidad') !!}
    {!! Form::number('ci', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la cedula de Identidad.',
        'min' => '9999999', 
        'max' => '99999999',
        $disabled]) !!}
    @error('ci') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('rif','RIF') !!}
    {!! Form::text('rif', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el numero de RIF (Registro Único de Información Fiscal).',$disabled]) !!}
    @error('rif') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('phone','Teléfono') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el numero de teléfono. Ej: xxx-xxxxxxx',$disabled]) !!}
    @error('phone') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    {!! Form::label('email','Correo') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el correo electronico. Ej: correo@dominio.com',$disabled]) !!}
    @error('email') <div class="form-group label text-danger mt-2">{{ $message}}</div>@enderror
</div>

<div class="form-group">
    <label for="address">Dirección</label>
    <textarea class="form-control {{ $disabled }}" id="address" name="address" rows="4" placeholder="Ingrese una dirección">{{ old('address') }}</textarea>
    @error('address') <span class="form-group label text-danger mt-2">{{ $message}}</span>@enderror
</div>