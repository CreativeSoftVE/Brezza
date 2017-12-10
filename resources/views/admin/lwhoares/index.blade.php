@extends('admin.layouts.app')

@section('title', 'Quienes somos')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Quienes somos</strong></h2>
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
                  <strong>Contenido: Quienes somos</strong>
               </h4>
            </div>
            <div class="ibox-content">
               <a href="{{ url('/admin/whoares/1/edit') }}" class="btn btn-info btn-sm">Editar contenido de la sección</a> 
               <div class="row">
                   <br>
                   <div class="col-lg-3"><img src="{{ $whoares -> img }}" alt="Paso 1" class="img-responsive "></div>
                   <div class="col-lg-8">
                       <br><br>
                       <div class="row">
                           <strong>Título de la sección: </strong> {{ $whoares -> titulo1 }}<br>
                           <strong>Descripción de la sección: </strong> {{ $whoares -> descripcion1 }}
                       </div><br><br>
                       <div class="row">
                           <strong>Section's title: </strong> {{ $whoares -> titulo2 }}<br>
                           <strong>Section's description: </strong>{{ $whoares -> descripcion2 }}
                       </div>
                   </div>
               </div>
               <hr width="322px">
               <div class="row">
                  <!-- ESPAÑOL-->
                  <div class="col-lg-6"><br/>
                     <h3 style="color:#00257B">CONTENIDO DE SECCIÓN QUIENES SOMOS. ESPAÑOL</h3>
                       <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Brezza Project S.A.</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                   {{ $whoares -> texto1 }}
                                 </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Visión</a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  {{ $whoares -> texto2 }}
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Misión</a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                   {{ $whoares -> texto3 }}
                                </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Organización</a>
                                </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{ $whoares -> texto4 }}
                                </div> 
                              </div>
                            </div>
                          </div> 
                  </div>
                  <!-- INGLES-->
                  <div class="col-lg-6"><br/>
                     <h3 style="color:#00257B">WHO ARE? CONTENT. ENGLISH</h3> 
                       <div class="panel-group" id="accordion2">
                             <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Brezza Project S.A</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                     {{ $whoares -> text1 }}
                                 </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">Vision</a>
                                </h4>
                              </div>
                              <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                     {{ $whoares -> text2 }}
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">Mission</a>
                                </h4>
                              </div>
                              <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{ $whoares -> text3 }}
                                </div> 
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse9">Organization</a>
                                </h4>
                              </div>
                              <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{ $whoares -> text4 }}
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