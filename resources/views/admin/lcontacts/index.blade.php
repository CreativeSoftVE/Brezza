@extends('admin.layouts.app')

@section('title', 'Contácto')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Contácto</strong></h2>
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
                  <strong>Contenido: Contácto</strong>
               </h4>
            </div>
            <div class="ibox-content">
               <a href="{{ url('/admin/contacts/1/edit') }}" class="btn btn-info btn-sm">Editar contenido de la sección</a>
               <div class="row">
                  <div class="col-lg-5 col-lg-offset-1">
                      <br/><h3 style="color:#00257B">ELEMENTOS DE SECCIÓN CONTÁCTO. ESPAÑOL</h3>
                      <label for="example-text-input" class="col-2 col-form-label">Título de la sección: </label>
                      <label for="example-text-input" class="col-2 col-form-label"> <strong>{{ $contacts -> titulo1}} </strong></label><br>
                      <label for="example-text-input" class="col-2 col-form-label">Descripción de la sección: </label>
                      <label for="example-text-input" class="col-2 col-form-label"> {{ $contacts -> descripcion1}} </label><br>
                      <label for="example-text-input" class="col-2 col-form-label">Dirección a mostrar: </label>
                      <label for="example-text-input" class="col-2 col-form-label"> {{ $contacts -> direccion1}} </label><br>
                      
                  </div>
                  <div class="col-lg-5 col-lg-offset-1">
                     <br/><h3 style="color:#00257B">CONTACT SECTION'S ELEMENTS. ENGLISH</h3>
                     <label for="example-text-input" class="col-2 col-form-label">Título de la sección: </label>
                      <label for="example-text-input" class="col-2 col-form-label"> {{ $contacts -> titulo2}} </label><br>
                      <label for="example-text-input" class="col-2 col-form-label">Descripción de la sección: </label>
                      <label for="example-text-input" class="col-2 col-form-label"> {{ $contacts -> descripcion2}} </label><br>
                      <label for="example-text-input" class="col-2 col-form-label">Dirección a mostrar: </label>
                      <label for="example-text-input" class="col-2 col-form-label"> {{ $contacts -> direccion2}} </label><br>
                  </div>
               </div>
               <br><br><hr width="322px">
               <div class="row"><div class="col-lg-6 col-lg-offset-4">
                  <br/><h3 style="color:#00257B">OTROS DATOS: </h3>
                  <label for="example-text-input" class="col-2 col-form-label"> <i class="fa fa-phone-square" style="color:#00257B" aria-hidden="true"></i> Teléfono:  </label>
                  <label for="example-text-input" class="col-2 col-form-label">+58 (0251) {{ $contacts -> telefono1}} </label><br>
                  <label for="example-text-input" class="col-2 col-form-label"> <i class="fa fa-facebook-square" style="color:#00257B" aria-hidden="true"></i> Enlace cuenta de facebook:  </label>
                  <label for="example-text-input" class="col-2 col-form-label">{{ $contacts -> facebook1}} </label><br>
                  <label for="example-text-input" class="col-2 col-form-label"> <i class="fa fa-twitter-square" style="color:#00257B" aria-hidden="true"></i> Enlace cuenta de twitter:  </label>
                  <label for="example-text-input" class="col-2 col-form-label">{{ $contacts -> twitter1}} </label><br>
                  <label for="example-text-input" class="col-2 col-form-label"> <i class="fa fa-instagram" style="color:#00257B" aria-hidden="true"></i> Enlace cuenta de instagram:  </label>
                  <label for="example-text-input" class="col-2 col-form-label">{{ $contacts -> instagram1}} </label><br>
               </div></div><br><br>
            </div>
         </div>
      </div>
   </div>
</div>
   
@endsection