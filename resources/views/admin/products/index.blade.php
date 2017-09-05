@extends('admin.layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Products</strong></h2>
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
                  <strong>Listado: Products</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <a href="{{route('products.create') }}" class="btn btn-info btn-sm">Agregar nuevo producto</a> 
                {!! Form::open(['route' => 'products.index', 'method' => 'GET', 'class'=> 'navbar-form pull-right']) !!}
                <div class="input-group">
                  {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Buscar producto...', 'require']) !!}
                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
                {!! Form::close() !!}
                
               
                <br/><br/>
                <div class="ibox float-e-margins">
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Nombre</th>
                            </thead>
                            <tbody>
                                @Foreach($products as $product) 
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product -> name}}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{ route('products.destroy', $product->id)}}" onclick="return confirm('Seguro que deseas eliminar esta etiqueta?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endForeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $products->render()!!}
                        </div>

                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   
@endsection