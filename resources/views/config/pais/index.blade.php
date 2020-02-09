@extends('layouts.templete')

@section('title','País')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/templete/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="/templete/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
          <li class="breadcrumb-item"><a href="{{ route('configuracion.index') }}">Configuración</a></li>
          <li class="breadcrumb-item active">País</a> </li>
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
          <h3 class="card-title"><i class="fas fa-list text-teal"></i> Listado pais</h3>
          @can('config.pais.create')
          <a href="{{ route('pais.create') }}" title="Crear nuevo registro" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1 float-right">&nbsp;&nbsp;<i class="fas fa-plus text-teal"></i>&nbsp;&nbsp;</a>
          @endcan
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-1 m-1">
          <table id="listadopais" class="table table-condensed table-hover p-0">
            <thead>
              <th width="10px">Cod</th>
              <th>Nombre</th>
              <th>abreviado</th>
              <th>estatus</th>
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
  <script src="/templete/plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
@endsection

@section("datatables")
  <script>
    $(document).ready(function() {
      $('#listadopais').DataTable({
        "serverSide": true,
        "ajax" : "{{ url('listadopais') }}",
        "columns": [
          {data: 'id'},
          {data: 'nombre'},
          {data: 'abreviado'},
          {data: 'estatus'},
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
  {{-- <script>
    $(document).ready(function () {
        $("#role").on('submit', '.form-eliminar', function () {
            event.preventDefault();
            const form = $(this);
            swal({
                title: '¿ Está seguro que desea eliminar el registro ?',
                text: "Esta acción no se puede deshacer!",
                icon: 'warning',
                buttons: {
                    cancel: "Cancelar",
                    confirm: "Aceptar"
                },
            }).then((value) => {
                if (value) {
                    ajaxRequest(form);
                }
            });
        });

        function ajaxRequest(form) {
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: form.serialize(),
                success: function (respuesta) {
                    if (respuesta.mensaje == "ok") {
                        form.parents('tr').remove();
                        Biblioteca.notificaciones('El registro fue eliminado correctamente', 'Biblioteca', 'success');
                    } else {
                        Biblioteca.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Biblioteca', 'error');
                    }
                },
                error: function () {

                }
            });
        }
    });
  </script> --}}
@endsection