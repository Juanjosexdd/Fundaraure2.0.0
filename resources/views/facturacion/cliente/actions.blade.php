<div class="btn-group m-0">
    <td>
        @can('cliente.show')
        <a title="Ver" href="{{route('cliente.show', $id)}}" title="Ver" data-toggle="tooltip" data-placement="top" class="btn btn-default m-0" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-eye text-info"></i></a>
        @endcan
    </td>
    <td>
        @can('cliente.edit')
        <a title="Editar" href="{{route('cliente.edit', $id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-default" style="height: 32px; padding-bottom: 3px; padding-top: 3px;"><i class="fa fa-edit text-warning"></i></a>
        @endcan
    </td>
    
    <td>
        @can('cliente.destroy')
        <form class=" inline form-eliminar" method="post" action="{{ route('cliente.destroy', $id)}}">
            @csrf @method('DELETE')
            <button title="Eliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-default btn-flat rounded-right" style="height: 32px; padding-bottom: 3px; padding-top: 3px; border-left:0px;"><i class="far fa-trash-alt text-danger"></i></button>
        </form>
        @endcan
    </td>
</div>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>