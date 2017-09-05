@extends('admin.layouts.app')

@section('title', 'Editar etiqueta ' .$tag->name)

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
                  <strong>Editar tag: {{ $tag->name}}</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['tags.update', $tag] , 'method' => 'PUT']) !!}
                      <div class="form-group">
                        <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                        <div class="col-10">
                            {!! Form::text('name',$tag->name,['class'=>'form-control', 'placeholder'=>'Nombre del tag', 'require']) !!}
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