@extends('admin.layouts.app')

@section('title', 'Actualizar sección beneficios')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Beneficios</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('benefits.index') }}">Beneficios</a>
         </li>
         <li class="active">
            <strong class="text-blue">Actualizar</strong>
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
                  <strong>Actualizar sección beneficios</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['benefits.update', $benefit] , 'method' => 'PUT']) !!}
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1">
                            <h3 style="color:#00257B">ESPAÑOL</h3>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Título beneficio 1</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo1',$benefit->titulo1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción beneficio 1</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion1',$benefit->descripcion1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Título beneficio 2</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo2',$benefit->titulo2,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción beneficio 2</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion2',$benefit->descripcion2,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Título beneficio 3</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo3',$benefit->titulo3,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción beneficio 3</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion3',$benefit->descripcion3,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Título beneficio 4</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo4',$benefit->titulo4,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción beneficio 4</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion4',$benefit->descripcion4,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                            <h3 style="color:#00257B">INGLÉS</h3>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's title 1</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo12',$benefit->titulo12,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's description 1</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion12',$benefit->descripcion12,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's title 2</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo22',$benefit->titulo22,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's description 2</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion22',$benefit->descripcion22,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's title 3</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo32',$benefit->titulo32,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's description 3</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion32',$benefit->descripcion32,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's title 4</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo42',$benefit->titulo42,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Benefit's description 4</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion42',$benefit->descripcion42,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                            </div>
                        

                      <div class="col-lg-4 col-lg-offset-8"><br><br>
                          <div class=" form-group">
                              {!! Form::submit('Guardar cambios',  ['class'=>'btn btn-success']); !!}
                              <a href="/admin/contacts" class="btn btn-default">Volver</a>
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