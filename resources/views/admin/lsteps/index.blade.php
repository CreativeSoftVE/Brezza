@extends('admin.layouts.app')

@section('title', 'Pasos')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Pasos</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="active">
            <strong class="text-blue">Contenido</strong>
         </li>
      </ol>
   </div>
</div>
<div class=""><br/>@include('flash::message')</div>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-sm-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h4 class="text-dark-blue">
                  <strong>Contenido: Pasos</strong>
               </h4>
            </div>
            <div class="ibox-content">
               <a href="{{ url('/admin/steps/1/edit') }}" class="btn btn-info btn-sm">Editar contenido de la sección</a> 
               <div class="row">
                  <!-- ESPAÑOL-->
                  <div class="col-lg-6"><br/>
                     <h3 style="color:#00257B">CONTENIDO DE SECCIÓN PASOS. ESPAÑOL</h3>
                       <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Paso #1</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img1 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso11 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc11 }}
                                    </em>
                                    </div>
                                 </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Paso #2</a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img2 }}" alt="Paso 2" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso21 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc21 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Paso #3</a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img3 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso31 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc31 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Paso #4</a>
                                </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img4 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso41 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc41 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Paso #5</a>
                                </h4>
                              </div>
                              <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img5 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso51 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc51 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div> 
                              </div>
                            </div>
                          </div> 
                  </div>
                  <!-- INGLES-->
                  <div class="col-lg-6"><br/>
                     <h3 style="color:#00257B">STEPS' CONTENT. ENGLISH</h3> 
                       <div class="panel-group" id="accordion2">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">Step #1</a>
                                </h4>
                              </div>
                              <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img1 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso12 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc12 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">Step #2</a>
                                </h4>
                              </div>
                              <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img2 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso22 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc22 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">Step #3</a>
                                </h4>
                              </div>
                              <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img3 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso32 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc32 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse9">Step #4</a>
                                </h4>
                              </div>
                              <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img4 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso42 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc42 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse10">Step #5</a>
                                </h4>
                              </div>
                              <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                    <div class="col-lg-3"><img src="{{ $steps -> img5 }}" alt="Paso 1" class="img-responsive  img-circle pasos-img"></div>
                                    <div class="col-lg-9">
                                    <h2>
                                        {{ $steps -> paso52 }}
                                    </h2>
                                    <em>
                                        {{ $steps -> desc52 }}
                                    </em>
                                    </div>
                                 </div> 
                                </div>
                              </div>
                            </div>
                          </div> 
                  </div>
               </div>
                
            </div>
         </div>
      </div>
   </div>
</div>
   
@endsection