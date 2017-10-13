@extends('admin.layouts.app')

@section('title', 'Pie de página')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Pie de página</strong></h2>
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
                  <strong>Contenido: Pie de página</strong>
               </h4>
            </div>
            <div class="ibox-content">
               <a href="{{ url('/admin/footers/1/edit') }}" class="btn btn-info btn-sm">Editar contenido de la sección</a> 
               <div class="row">
                  <!-- ESPAÑOL-->
                  <div class="col-lg-6"><br/>
                     <h3 style="color:#00257B">ELEMENTOS PIE DE PAGINA. ESPAÑOL</h3>
                       <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Politicas de privacidad</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">{{ $footers -> contenido1}}</div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Prospectiva</a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">{{ $footers -> contenido2}}</div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Escalabilidad web</a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">{{ $footers -> contenido3}}</div>
                              </div>
                            </div>
                          </div> 
                  </div>
                  <!-- INGLES-->
                  <div class="col-lg-6"><br/>
                     <h3 style="color:#00257B">FOOTERS' ELEMENTS. ENGLISH</h3> 
                       <div class="panel-group" id="accordion2">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">Privacy policies</a>
                                </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">{{ $footers -> content1}}</div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">Prospective</a>
                                </h4>
                              </div>
                              <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">{{ $footers -> content2}}</div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">Web scalability</a>
                                </h4>
                              </div>
                              <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">{{ $footers -> content3}}</div>
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