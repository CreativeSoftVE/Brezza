@extends('admin.layouts.app')

@section('title', 'Actualizar sección quienes somos')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Quienes somos</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('whoares.index') }}">Quienes somos</a>
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
                  <strong>Actualizar Quienes somos</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['whoares.update', $whoare] , 'method' => 'PUT']) !!}
                      <div class="row">
                          <div class="col-lg-5 col-lg-offset-1">
                              <strong>Título de la sección: </strong> {!! Form::text('titulo1',$whoare->titulo1,['class'=>'form-control', 'require']) !!}
                              <strong>Descripción de la sección: </strong> {!! Form::text('descripcion1',$whoare->descripcion1,['class'=>'form-control', 'require']) !!}
                          </div>
                          <div class="col-lg-5">
                              <strong>Section's title: </strong> {!! Form::text('titulo2',$whoare->titulo2,['class'=>'form-control', 'require']) !!}
                              <strong>Section's description: </strong> {!! Form::text('descripcion2',$whoare->descripcion2,['class'=>'form-control', 'require']) !!}
                              
                          </div>
                      </div>
                      <hr width="322px">
                      <div class="row">
                         <div class="col-lg-5 col-lg-offset-1">
                           <h3 style="color:#00257B">CONTENIDO DE SECCIÓN QUIENES SOMOS?. ESPAÑOL</h3>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Brezza Project S.A</label>
                                   {!! Form::textarea('texto1',$whoare->texto1,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Visión</label>
                                   {!! Form::textarea('texto2',$whoare->texto2,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Misión</label>
                                   {!! Form::textarea('texto3',$whoare->texto3,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Organización</label>
                                   {!! Form::textarea('texto4',$whoare->texto4,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                         </div>
                         <div class="col-lg-5">
                           <h3 style="color:#00257B">WHO ARE? CONTENT. ENSGLISH</h3>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Brezza Project S.A</label>
                                   {!! Form::textarea('text1',$whoare->text1,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Vision</label>
                                   {!! Form::textarea('text2',$whoare->text2,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Mission</label>
                                   {!! Form::textarea('text3',$whoare->text3,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                              <div class="form-group">
                                  <label for="example-text-input" class="col-2 col-form-label">Organization</label>
                                   {!! Form::textarea('text4',$whoare->text4,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-lg-offset-8"><br><br>
                          <div class=" form-group">
                              {!! Form::submit('Guardar cambios',  ['class'=>'btn btn-success']); !!}
                              <a href="/admin/whoares" class="btn btn-default">Volver</a>
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