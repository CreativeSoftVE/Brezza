@extends('admin.layouts.app')

@section('title', 'Lista de usuarios')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2 class="text-dark-blue"><strong>Usuarios</strong></h2>
      <ol class="breadcrumb">
         <li>
            <a href="/admin/">Inicio</a>
         </li>
         <li class="active">
            <strong class="text-blue">Listado</strong>
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
                  <strong>Listado: Beneficios</strong>
               </h4>
            </div>
            <div class="ibox-content">
                <a href="{{route('users.create') }}" class="btn btn-info btn-sm">Registrar nuevo usuario</a> <br><br>
                <div class="ibox float-e-margins">
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Tipo</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                @Foreach($users as $user) 
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user -> name}}</td>
                                    <td>{{$user -> email}}</td>
                                    <td>
                                        @if($user->type == 'admin')
                                          <span class="badge badge-success">{{$user -> type}}</span>
                                        @else
                                          <span class="badge badge-primary">{{$user -> type}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endForeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $users->render()!!}
                        </div>

                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>






    
    
@endsection
