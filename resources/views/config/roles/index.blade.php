@extends('layouts.templete')

@section('title','Roles')

@section('styles')

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
          <li class="breadcrumb-item"><a href="{{ route('configuracion.index') }}">Configuración</a></li>
          <li class="breadcrumb-item active">Roles</a> </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
@include('partials.message-session')
  <section class="content">
    <div class="col-xs-12">
      <div class="card card-solid card-default">
        <div class="card-header mailbox-controls">
          <h3 class="card-title"><i class="fas fa-list text-teal"></i> Listado de roles</h3>
          <a href="{{ route('roles.create') }}" title="Crear nuevo registro" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1 float-right">&nbsp;&nbsp;<i class="fas fa-plus text-teal"></i>&nbsp;&nbsp;</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-1 m-1">
          <table id="role" class="table table-condensed table-hover p-0">
            <thead>
              <th width="10px">Cod</th>
              <th>Nombre</th>
              <th>Slug</th>
              <th>Descripción</th>
              <th width="13%">Acciónes</th>
            </thead>
            <tbody>
            @foreach($roles as $role)
              <tr class="p-0 m-0">
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->slug}}</td>
                <td>{{$role->description}}</td>
                <td>
                  <div class="btn-group m-0">
                    @can('config.roles.edit')
                    <a title="Editar" href="{{route('roles.edit', $role->id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-default" style="height: 32px; padding-bottom: 3px; border-right:0px; padding-top: 3px;"><i class="fa fa-edit text-warning"></i></a>
                    @endcan
                    @can('')
                    <form id="eliminar" class="inline" method="post" action="{{ route('config.roles.destroy', $role->id)}}">
                        @csrf @method('DELETE')
                        <button title="Eliminar" data-toggle="tooltip" data-placement="top" class="btn btn-default btn-flat rounded-right" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="far fa-trash-alt text-danger" onClick="role"></i></button>
                    </form>
                    @endcan
                </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <hr>
          <div class="m-1 p-1">
            <div class='float-left'>
              <span>Hay un total de {!! $roles->total() !!} roles registrados</span>
            </div>
            <div class="float-right">
              {{$roles->links()}}
            </div>
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
  <script src="/templete/plugins/sweetalert2/sweetalert2.all.min.js"></script>-->
@endsection

@section("datatables")
  <!-- <script>
    $(document).ready(function() {
      $('#role').DataTable({
        "serverSide": true,
        "ajax" : "{{ url('role') }}",
        "columns": [
          {data: 'id'},
          {data: 'name'},
          {data: 'slug'},
          {data: 'description'},
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
  </script> -->
@endsection