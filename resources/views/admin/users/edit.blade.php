@extends('admin.layouts.app')

@section('title', 'Editar usuario ' .$user->name)

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Usuarios</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('users.index') }}">Usuarios</a>
         </li>
         <li class="active">
            <strong class="text-blue">Editar</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-sm-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h4 class="text-dark-blue">
                  <strong>Editar usuario: {{ $user->name}}</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['users.update',$user] , 'method' => 'PUT']) !!}
                      <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            {!! Form::text('name',$user->name,['class'=>'form-control', 'placeholder'=>'Nombre completo', 'require']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            {!! Form::email('email',$user->email,['class'=>'form-control', 'placeholder'=>'email@example.com', 'require']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Tipo</label>
                        <div class="col-10">
                            {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class'=>'form-control','placeholder'=>'Selecciona un tipo']); !!}
                        </div>
                      </div>
                      <div class="form-group">
                          {!! Form::submit('Guardar cambios',  ['class'=>'btn btn-success']); !!}
                      </div>
                      {!! Form::close() !!}   
                  
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection