<div class="btn-group float-right">
    <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">Usuarios  
    </button>
    &nbsp;&nbsp; 
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
        @can('config.users.index')
        <a class="dropdown-item" href="{{ route('config.users.index')}}">Todos los usuarios</a>
        <div class="dropdown-divider"></div>
        @endcan
        @can('config.users.create')
        <a class="dropdown-item" href="{{route('config.users.create')}}">Agregar usuario</a>
        <div class="dropdown-divider"></div>
        @endcan
        <a class="dropdown-item" href="">Usuarios Inactivos</a>
        <div class="dropdown-divider"></div>
        @can('config.users.index')
        <a class="dropdown-item" href="{{ route('config.users.trashed')}}">Usuarios eliminados</a>
        @endcan
    </div>
</div>