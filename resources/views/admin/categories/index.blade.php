@extends('admin.layouts.app')

@section('title', 'Categorías')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Categorias</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="{{ url('/admin') }}">Inicio</a>
         </li>
         <li class="active">
            <strong class="text-blue">Listado</strong>
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
                  <strong>Listado: Categorias</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <a href="{{route('categories.create') }}" class="btn btn-info btn-sm">Registrar nueva Categoria</a> <br><br>
                <div class="ibox float-e-margins">
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>description</th>
                                <th>Tipo</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                  @Foreach($categories as $category) 
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category -> name}}</td>
                                    <td>{{$category -> description}}</td>
                                    <td>    
                                              <span class="badge badge-success">{{$category -> type}}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{ route('admin.categories.destroy', $category->id)}}" onclick="return confirm('Seguro que deseas eliminar esta Categoria?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endForeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $categories->render()!!}
                        </div>

                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   
@endsection