@extends('layouts.templete')

@section('title','Editar Rol')

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
          <li class="breadcrumb-item active"> <a href="{{ route('roles.index') }}">Roles</a> </li>
          <li class="breadcrumb-item active">Editar</a> </li>

        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
@include('partials.message-session')
  <section class="content">
    <div class="col-md-12">
      <div class="card card-solid card-default">
        <div class="card-header mailbox-controls">
          <h3 class="card-title"> <i class="fa fa-edit text-warning"></i>  Editar rol</h3>
          <div class="float-right">
            <a href="{{ route('roles.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
          </div>          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              {!! Form::model($role, ['route' => ['roles.update', $role->id],'method' => 'PUT'])!!}
                  @include('config.roles.partials.form')
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
