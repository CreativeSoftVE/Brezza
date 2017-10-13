@extends('admin.layouts.app')

@section('title', 'Actualizar sección pie de página')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Pie de página</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('footers.index') }}">Pie de página</a>
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
                  <strong>Actualizar pie de página</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['footers.update', $footer] , 'method' => 'PUT']) !!}
                      <div class="row">
                         <div class="col-lg-5 col-lg-offset-1">
                           <h3 style="color:#00257B">ELEMENTOS PIE DE PAGINA. ESPAÑOL</h3>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Politicas de privacidad</label>
                              <div class="col-10">
                                  {!! Form::textarea('contenido1',$footer->contenido1,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Prospectiva de Brezza Project</label>
                              <div class="col-10">
                                  {!! Form::textarea('contenido2',$footer->contenido2,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Escalabilidad web</label>
                              <div class="col-10">
                                  {!! Form::textarea('contenido3',$footer->contenido3,['class'=>'form-control', 'rows' => '5','require']) !!}
                              </div>
                           </div>
                            
                         </div>
                         <div class="col-lg-5">
                            <h3 style="color:#00257B">FOOTERS' ELEMENTS. ENGLISH</h3> 
                            <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Privacy policies</label>
                              <div class="col-10">
                                  {!! Form::textarea('content1',$footer->content1,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Brezza Project's Prospective </label>
                              <div class="col-10">
                                  {!! Form::textarea('content2',$footer->content2,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Web scalability</label>
                              <div class="col-10">
                                  {!! Form::textarea('content3',$footer->content3,['class'=>'form-control','rows' => '5', 'require']) !!}
                              </div>
                           </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-lg-offset-8"><br><br>
                          <div class=" form-group">
                              {!! Form::submit('Guardar cambios',  ['class'=>'btn btn-success']); !!}
                              <a href="/admin/footers" class="btn btn-default">Volver</a>
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