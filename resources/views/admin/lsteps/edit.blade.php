@extends('admin.layouts.app')

@section('title', 'Actualizar sección pasos')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Pasos</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="">
            <a href="{{ route('steps.index') }}">Pasos</a>
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
                  <strong>Actualizar Pasos</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="row">
                        
                      {!! Form::open(['route' => ['steps.update', $step] , 'method' => 'PUT']) !!}
                      <div class="row">
                          <div class="col-lg-5 col-lg-offset-1">
                              <strong>Título de la sección: </strong> {!! Form::text('titulo1',$step->titulo1,['class'=>'form-control', 'require']) !!}
                              <strong>Descripción de la sección: </strong> {!! Form::text('descripcion1',$step->descripcion1,['class'=>'form-control', 'require']) !!}
                          </div>
                          <div class="col-lg-5">
                              <strong>Section's title: </strong> {!! Form::text('titulo2',$step->titulo2,['class'=>'form-control', 'require']) !!}
                              <strong>Section's description: </strong> {!! Form::text('descripcion2',$step->descripcion2,['class'=>'form-control', 'require']) !!}
                              
                          </div>
                      </div>
                      <hr width="322px">
                      <div class="row">
                         <div class="col-lg-5 col-lg-offset-1">
                           <h3 style="color:#00257B">CONTENIDO SECCIÓN PASOS. ESPAÑOL</h3>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Paso #1</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img1 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso11',$step->paso11,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc11',$step->desc11,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                                  
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Paso #2</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img2 }}" alt="Paso 2" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso21',$step->paso21,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc21',$step->desc21,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Paso #3</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img3 }}" alt="Paso 3" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso31',$step->paso31,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc31',$step->desc31,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Paso #4</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img4 }}" alt="Paso 4" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso41',$step->paso41,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc41',$step->desc41,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Paso #5</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img5 }}" alt="Paso 5" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso51',$step->paso51,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc51',$step->desc51,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                         </div>
                         <div class="col-lg-5">
                           <h3 style="color:#00257B">STEPS' CONTENT. ENGLISH</h3>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">STEP #1</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img1 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso12',$step->paso12,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc12',$step->desc12,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                                  
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Step #2</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img2 }}" alt="Paso 2" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso22',$step->paso22,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc22',$step->desc22,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Step #3</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img3 }}" alt="Paso 3" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso32',$step->paso32,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc32',$step->desc32,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Step #4</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img4 }}" alt="Paso 4" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso42',$step->paso42,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc42',$step->desc42,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="example-text-input" class="col-2 col-form-label">Step #5</label>
                              <div class="col-10">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $step -> img5 }}" alt="Paso 5" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {!! Form::text('paso52',$step->paso52,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </h2>
                                    <em>
                                        {!! Form::textarea('desc52',$step->desc52,['class'=>'form-control','rows' => '5', 'require']) !!}
                                    </em>
                                    </div>
                                 </div>
                              </div>
                           </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-lg-offset-8"><br><br>
                          <div class=" form-group">
                              {!! Form::submit('Guardar cambios',  ['class'=>'btn btn-success']); !!}
                              <a href="/admin/steps" class="btn btn-default">Volver</a>
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