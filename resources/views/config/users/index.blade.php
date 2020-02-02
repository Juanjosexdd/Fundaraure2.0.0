@extends('layouts.templete')

@section('title','Usuarios')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/templete/plugins/sweetalert2.min.css">
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h5 class="m-0 text-teal"><i class="nav-icon fas fa-cogs"></i> Configuración</h5>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"> <a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"> <a href="{{route('configuracion.index')}}">Configuración</a></li>
          <li class="breadcrumb-item active">Usuarios</a> </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

<!-- Content Header (Page header) -->
@section('content')
  @include('partials.message-session')
  <section class="content">
    <div class="col-xs-12">
      <div class="card card-solid card-default">
        <div class="card-header mailbox-controls">
          <h3 class="card-title"><i class="fas fa-list text-teal"></i> Listado de Usuarios</h3>
          @can('config.users.create')
          <a href="{{ route('config.users.create') }}" title="Crear nuevo registro" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1 float-right">&nbsp;&nbsp;<i class="fas fa-plus text-teal"></i>&nbsp;&nbsp;</a>      
          @include('config.users.partials.btn-users')
          @endcan
        </div>
        <div class="card-body table-responsive p-1 m-1">
          <table id="user" class="table table-condensed table-hover p-0">
            <thead>
              <th width="5%">#</th>
              <th>Cedula</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Estado</th>
              <th>Actualizado</th>
              <th width="13%">Acciónes</th>
            </thead>
            <tbody>
            @foreach($users as $user)
              <tr class="p-0 m-0">
                <td>{{$user->id}}</td>
                <td>{{$user->cedula}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <span class="badge bg-teal"><a href="" data-toggle="modal" data-target="#cambiarEstatus">{{$user->estatus}}</a></span>
                </td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                <td>
                  <div class="btn-group m-0">
                    @can('config.users.show')
                    <a title="Ver" href="{{route('config.users.show', $user->id)}}" title="Ver" data-toggle="tooltip" data-placement="top" class="btn btn-default m-0" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-eye text-info"></i></a>
                    @endcan
                    @can('config.users.edit')
                    <a title="Editar" href="{{route('config.users.edit', $user->id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-default" style="height: 32px; padding-bottom: 3px; border-right:0px; padding-top: 3px;"><i class="fa fa-edit text-warning"></i></a>
                    @endcan
                    @can('config.users.trashed')
                    <form id="eliminar" class="inline" method="post" action="{{ route('config.users.destroy', $user->id)}}">
                        @csrf @method('DELETE')
                        <button title="Eliminar" data-toggle="tooltip" data-placement="top" class="btn btn-default btn-flat rounded-right" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="far fa-trash-alt text-danger" onClick="user"></i></button>
                    </form>
                    @endcan
                </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <hr>
        <div class="m-1 p-1">
          <div class='float-left'>
            <span>Hay un total de {!! $users->total() !!} usuarios registrados</span></div>
          <div class="float-right">
            {{$users->links()}}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script src="/templete/plugins/datatables/jquery.dataTables.js"></script>
  <script src="/templete/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
@endsection