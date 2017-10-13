@extends('admin.layouts.app')

@section('title', 'Beneficios')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Beneficios</strong></h2>
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
                  <strong>Contenido: Beneficios</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <a href="{{ url('/admin/benefits/1/edit') }}" class="btn btn-info btn-sm">Editar contenido de la sección</a>
                <div class="row ">
                    <br/><h3 style="color:#00257B"> ELEMENTOS DE LA SECCIÓN DE BENEFICIOS. ESPAÑOL</h3>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo1}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion1}}
                       </p>
                    </div>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo2}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion2}}
                       </p>
                    </div>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo3}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion3}}
                       </p>
                    </div>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo4}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion4}}
                       </p>
                    </div>
                </div>
                <div class="row ">
                    <br/><h3 style="color:#00257B">CONTACT SECTION'S BENEFITS. ENGLISH</h3>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo12}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion12}}
                       </p>
                    </div>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo22}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion22}}
                       </p>
                    </div>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo32}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion32}}
                       </p>
                    </div>
                    <div class="col-sm-3">
                       <h2 style="color:#337ab7">{{ $benefits -> titulo42}}</h2>
                       <p align=justify>
                           {{ $benefits -> descripcion42}}
                       </p>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
   
@endsection