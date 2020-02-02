@extends('layouts.templete')

@section('title','Crear Usuario')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Configuración</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{route('configuracion.index')}}">Configuración</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('config.users.index') }}">Usuario</a> </li>
          <li class="breadcrumb-item active">Crear</a> </li>
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
      <div class="card">
        <div class="card-header with-border mailbox-controls">
          <h3 class="card-title">Registrar usuario</h3>
          <div class="btn-group float-right">
            <div class="btn-group float-right">
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
            </div>
            &nbsp;&nbsp;
            <div>
              <a href="{{ route('config.users.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="col-md-12">
            <form method="POST" class="form-horizontal" action="{{ route('config.users.store') }}">
              @csrf
              @include('config.users.partials.form',['btnText'=>'Guardar'])
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection
