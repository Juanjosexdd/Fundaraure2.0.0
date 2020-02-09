@extends('layouts.templete')

@section('title','Cliente')

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
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="}">Facturacion</a></li>
          <li class="breadcrumb-item active">Cliente</a> </li>
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
          <h3 class="card-title"><i class="fas fa-list text-teal"></i> Listado cliente</h3>
          @can('config.cliente.create')
          <a href="{{ route('cliente.create') }}" title="Crear nuevo registro" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1 float-right">&nbsp;&nbsp;<i class="fas fa-plus text-teal"></i>&nbsp;&nbsp;</a>  
          @endcan
        </div>
        <div class="card-body table-responsive p-1 m-1">
          <table id="listadocliente" class="table table-condensed table-hover p-0">
            <thead>
              <th width="5%">#</th>
              <th>Cedula</th>
              <th>Rif</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Direccion</th>
              <th width="13%">Acciónes</th>
            </thead>
          </table>
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
      $('#listadocliente').DataTable({
        "serverSide": true,
        "ajax" : "{{ url('listadocliente') }}",
        "columns": [
          {data: 'id'},
          {data: 'cedula'},
          {data: 'rif'},
          {data: 'nombres'},
          {data: 'apellidos'},
          {data: 'telefono'},
          {data: 'email'},
          {data: 'direccion'},
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

