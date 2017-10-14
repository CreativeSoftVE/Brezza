@extends('admin.layouts.app')

@section('title', 'Actualizar sección contácto')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Contácto</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('contacts.index') }}">Contácto</a>
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
                  <strong>Actualizar sección contácto</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['contacts.update', $contact] , 'method' => 'PUT']) !!}
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1">
                            <h3 style="color:#00257B">ESPAÑOL</h3>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Título de la sección</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo1',$contact->titulo1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción de la sección</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion1',$contact->descripcion1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción de la sección</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('direccion1',$contact->direccion1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                            <h3 style="color:#00257B">INGLES</h3>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Title of the section</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('titulo2',$contact->titulo2,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Section's description</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('descripcion2',$contact->descripcion2,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Descripción de la sección</label>
                                    <div class="col-lg-10">
                                       {!! Form::text('direccion2',$contact->direccion2,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                            </div>
                        </div><hr width="322px">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <h3 style="color:#00257B">OTROS DATOS</h3>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label">Télefono de contácto <i class="fa fa-phone-square" aria-hidden="true"></i></label>
                                    <div class="col-lg-12">
                                       {!! Form::text('telefono1',$contact->telefono1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label"><br>Cuenta de facebook <i class="fa fa-twitter-square" aria-hidden="true"></i></label>
                                    <div class="col-lg-12">
                                       {!! Form::text('facebook1',$contact->facebook1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label"><br>Cuenta de twitter <i class="fa fa-twitter-square" aria-hidden="true"></i></label>
                                    <div class="col-lg-12">
                                       {!! Form::text('twitter1',$contact->twitter1,['class'=>'form-control', 'require']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-2 col-form-label"><br>Cuenta de instagram <i class="fa fa-instagram" aria-hidden="true"></i></label>
                                    <div class="col-lg-12">
                                       {!! Form::text('instagram1',$contact->instagram1,['class'=>'form-control', 'require']) !!}
                                    </div>
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