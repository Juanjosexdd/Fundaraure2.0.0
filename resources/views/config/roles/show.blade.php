@extends('layouts.templete')

@section('title','Detalle Rol')

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Configuración</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"> <a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item">Configuración</a></li>
          <li class="breadcrumb-item active"> <a href="{{ route('roles.index') }}">Roles</a> </li>
          <li class="breadcrumb-item active">Detalle</a> </li>

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
          <h3 class="card-title">&nbsp;&nbsp;Editar rol</h3>
          <div class="float-right">
            <a href="{{ route('roles.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
          </div>          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
