@extends('layouts.templete')

@section('title','Editar estatus factura')

@section('styles')
<!-- <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      <h1 class="m-0 text-teal"><i class="nav-icon fas fa-cogs"></i> Configuración</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="#">Facturación</a></li>
          <li class="breadcrumb-item"><a href="{{ route('servicio.index') }}">Estatus factura</a> </li>
          <li class="breadcrumb-item">Editar</a> </li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
  @include('partials.message-session')
  <section class="content">
    <div class="col-xs-12">
      <div class="card card-solid card-default">
        <div class="card-header with-border mailbox-controls">
          <h2 class="card-title"> <i class="fa fa-edit text-warning"></i> Editar datos de {{$servicio->nombre}}</h2>
          <div class="btn-group float-right">
          <a href="{{ route('servicio.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
          </div>
        </div>
        <div class="card-body">
          <div class="col-md-12">
            {!! Form::model($servicio, ['route' => ['servicio.update', $servicio->id],'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal'])!!}
              @method('PUT')
              @include('facturacion.servicio.partials.form',['btnText'=>'Enviar'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection