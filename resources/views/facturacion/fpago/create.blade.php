@extends('layouts.templete')

@section('title','Foma pago')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      <h5 class="m-0 text-teal"><i class="nav-icon fas fa-cogs"></i> Configuración</h5>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"> <a href="{{ route('configuracion.index')}}">Configuración</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('fpago.index') }}">Forma de pago</a> </li>
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
          <h3 class="card-title"> <i class="fa fa-edit text-warning"></i> Registrar forma de pago</h3>
          <div class="btn-group float-right">
            <a href="{{ route('fpago.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
          </div>
        </div>
        <div class="card-body">
          <div class="col-md-12">
            <form method="POST" class="form-horizontal" action="{{ route('fpago.store') }}">
              @csrf
              @include('facturacion.fpago.partials.form',['btnText'=>'Guardar'])
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection
