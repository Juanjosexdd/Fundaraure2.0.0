<div class="btn-group m-0">
    <td>
        @can('config.users.restore')
        <form class=" inline form-eliminar" method="post" action="{{ route('config.users.restore', $id)}}">
            @csrf @method('patch')
            <button title="Restaurar" data-toggle="tooltip" data-placement="top"  class="btn btn-default m-0 btn-flat rounded-left" style="height: 32px; padding-bottom: 3px; border-right:0; padding-top: 3px;"><i class="fas fa-sync text-teal"></i></button>
        </form>
        @endcan
    </td>
    <td>
        @can('config.users.permanentDeleteSoftDeleted')
        <form class=" inline form-eliminar" method="post" action="{{ route('config.users.permanentDeleteSoftDeleted', $id)}}">
            @csrf @method('delete')
            <button title="Eliminar permanentemente" data-toggle="tooltip" data-placement="top" title="Eliminar permanentemente" class="btn btn-default btn-flat rounded-right" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="far fa-trash-alt text-danger"></i></button>
        </form>
        @endcan
    </td>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>