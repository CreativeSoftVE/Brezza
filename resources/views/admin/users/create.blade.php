@extends('admin.layouts.app')

@section('title', 'Crear usuarios')

@section('content')
      <div class="card">
        <div class="card-header">
            Crear Usuario
        </div>
        <div class="card-block">
            {!! Form::open(['route' => 'users.store' , 'method' => 'POST']) !!}
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
              <div class="col-10">
                  {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre completo', 'require']) !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Email</label>
              <div class="col-10">
                  {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'email@example.com', 'require']) !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Contraseña</label>
              <div class="col-10">
                  {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'*****', 'require']) !!}
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Tipo</label>
              <div class="col-10">
                  {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class'=>'form-control','placeholder'=>'Selecciona un tipo']); !!}
              </div>
            </div>
            <div class="form-group row">
                {!! Form::submit('Registrar',  ['class'=>'btn btn-success']); !!}
            </div>
            {!! Form::close() !!}   
  
        </div>
    </div>
@endsection