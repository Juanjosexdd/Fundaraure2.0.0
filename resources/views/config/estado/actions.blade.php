<div class="btn-group m-0">
    <td>
        @can('estado.show')
        <a title="Ver" href="{{route('estado.show', $id)}}" title="Ver" data-toggle="tooltip" data-placement="top" class="btn btn-default m-0" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-eye text-info"></i></a>
        @endcan
    </td>
    <td>
        @can('estado.edit')
        <a title="Editar" href="{{route('estado.edit', $id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-default" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-edit text-warning"></i></a>
        @endcan
    </td>
    <td>
        @can('estado.destroy')
        <form class=" inline form-eliminar" method="post" action="{{ route('estado.destroy', $id)}}">
            @csrf @method('DELETE')
            <button title="Eliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-default btn-flat rounded-right" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="far fa-trash-alt text-danger"></i></button>
        </form>
        @endcan
    </td>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>