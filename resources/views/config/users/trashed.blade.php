@extends('layouts.templete')

@section('title','Usuarios')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-teal"><i class="nav-icon fas fa-cogs"></i> Configuración</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"> <a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"> <a href="{{route('configuracion.index')}}">Configuración</a></li>
          <li class="breadcrumb-item"><a href="{{route('config.users.index')}}">Usuarios</a></a> </li>
          <li class="breadcrumb-item active">Eliminados</li>
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
          <h3 class="card-title"> <i class="fas fa-list text-teal"></i> Listado de usuarios eliminados</h3>
          <div class="btn float-right">
            <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">Usuarios
            </button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
              <a class="dropdown-item" href="{{ route('config.users.index')}}">Todos los usuarios</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('config.users.create')}}">Agregar usuario</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="">Usuarios Inactivos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('config.users.trashed')}}">Usuarios eliminados</a>
          </div>
          @can('config.users.create')
          <a href="{{ route('config.users.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
          @endcan
          
        </div>
        <br>
        <br>
        <div class="card-body p-1 m-1">
          <div class="dataTables_wrapper dt-bootstrap4">
            <table id="user1" class="table table-responsive table-condensed table-hover p-0">
              <thead>
                <th width="5%">#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Eliminado</th>
                <th width="13%">Acciónes</th>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <script src="/templete/plugins/datatables/jquery.dataTables.js"></script>
  <script src="/templete/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="/templete/plugins/sweetalert2/sweetalert2.min.js"></script>
@endsection

@section("datatables")
  <script>
    $(document).ready(function() {
      $('#user1').DataTable({
        "serverSide": true,
        "ajax" : "{{ url('user1') }}",
        "columns": [
          {data: 'id'},
          {data: 'name'},
          {data: 'email'},
          {data: 'estatus'},
          {data: 'deleted_at'},
          {data: 'botones'}
        ],
        "language": {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          },
          "buttons": {
              "copy": "Copiar",
              "colvis": "Visibilidad"
          }
        }
      });
    });
  </script>
@endsection

