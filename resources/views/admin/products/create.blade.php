@extends('admin.layouts.app')

@section('title', 'Registrar producto')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Productos</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('products.index') }}">Productos</a>
         </li>
         <li class="active">
            <strong class="text-blue">Registrar</strong>
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
                    <strong>Registrar nuevo producto</strong>
                    </h4>
                </div>
                <div class="ibox-content">
                    <div class="ibox float-e-margins">
                        <div class="row">
                            {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' =>true]) !!}
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
                                    <div class="col-10">
                                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción</label>
                                    <div class="col-10">
                                    {!! Form::text('description',null,['class'=>'form-control trumbo', 'placeholder'=>'Descripción del producto', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Categoria</label>
                                    <div class="col-10">
                                        {!! Form::select('category_id', $categories, null,['class'=>'form-control select-category','placeholder'=>'Selecciona una opción' , 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Etiquetas</label>
                                    <div class="col-10">
                                        {!! Form::select('tags[]', $tags, null,['class'=>'form-control select-tag','multiple' , 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Imagen</label>
                                    <div class="col-10">
                                        {!! Form::file('image') !!}
                                    </div>
                                </div>
                                 <div class="form-group">
                                    
                                    <div class="col-10">
                                        {!! Form::submit('Guardar',['class'=>'btn btn-primary','multiple' , 'require']) !!}
                                    </div>
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

@section('scripts')
<script>
    $('.select-tag').chosen({
        placeholder_text_multiple: 'Seleccione las etiquetas'
    });
    
    $('.select-category').chosen({
        placeholder_text_multiple: 'Seleccione las etiquetas'
    });
    
    $('.trumbo').trumbowyg();
</script>
@endsection