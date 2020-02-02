<div class="btn-group m-0">
    
    <td>
        @can('roles.edit')
        <a title="Editar" href="{{route('roles.edit', $id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-default " style="border-right:0px; height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-edit text-warning"></i></a>
        @endcan
    </td>
    <td>
        <form id="eliminar" class=" inline form-eliminar" method="post" action="{{ route('roles.destroy', $id)}}">
            @csrf @method('DELETE')
            <button title="Eliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-default btn-flat rounded-right form-eliminar" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="far fa-trash-alt text-danger"></i></button>
        </form>
    </td>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script>
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
  </script>