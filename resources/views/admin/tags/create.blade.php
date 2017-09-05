@extends('admin.layouts.app')

@section('title', 'Agregar etiqueta')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Tags</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('tags.index') }}">Tags</a>
         </li>
         <li class="active">
            <strong class="text-blue">Agregar</strong>
         </li>
      </ol>
   </div>
</div>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-sm-12">
         @include('admin.layouts.error') 
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h4 class="text-dark-blue">
                  <strong>Registrar nuevo tag</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                      {!! Form::open(['route' => 'tags.store' , 'method' => 'POST']) !!}
                      <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre del tag', 'require']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                          {!! Form::submit('Registrar',  ['class'=>'btn btn-success']); !!}
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