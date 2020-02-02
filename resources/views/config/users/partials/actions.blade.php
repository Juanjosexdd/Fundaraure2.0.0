@section('styles')
  <link rel="stylesheet" href="/templete/plugins/sweetalert2.min.css">
@endsection
<div class="btn-group m-0">
    <td>
        @can('config.users.show')
        <a title="Ver" href="{{route('config.users.show', $id)}}" title="Ver" data-toggle="tooltip" data-placement="top" class="btn btn-default m-0" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-eye text-info"></i></a>
        @endcan
    </td>
    <td>
        @can('config.users.edit')
        <a title="Editar" href="{{route('config.users.edit', $id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-default" style="height: 32px; padding-bottom: 3px; border-right:0px; padding-top: 3px;"><i class="fa fa-edit text-warning"></i></a>
        @endcan
    </td>
    <td>
        @can('config.users.destroy')
        <form id="eliminar" class=" inline form-eliminar" method="post" action="{{ route('config.users.destroy', $id)}}">
            @csrf @method('DELETE')
            <button title="Eliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-default btn-flat rounded-right form-eliminar" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="far fa-trash-alt text-danger"></i></button>
        </form>
        @endcan
    </td>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<!-- @section('scripts')
<script src="/templete/plugins/jquery/jquery.min.js"></script>
<script src="/templete/plugins/sweetalert2/sweetalert2.min.js"></script>
@endsection
<script>
    $(document).ready(function () {
        $("#user").on('submit', '.form-eliminar', function () {
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
  </script> -->