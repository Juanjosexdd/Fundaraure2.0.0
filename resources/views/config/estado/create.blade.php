@extends('layouts.templete')

@section('title','Crear Estado')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/templete/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/templete/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0 text-teal"><i class="nav-icon fas fa-cogs"></i> Configuración</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('configuracion.index') }}">Configuración</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('estado.index') }}">Estado</a> </li>
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
          <h3 class="card-title"><i class="fa fa-edit text-warning"></i> Registrar estado</h3>
          <a href="{{ route('estado.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1 float-right">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
        </div>
        <div class="card-body">
          <div class="col-md-12">
            <form method="POST" action="{{ route('estado.store') }}">
              @csrf
              @include('config.estado.partials.form',['btnText'=>'Guardar'])
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
<!-- Select2 -->
<script src="/templete/plugins/select2/js/select2.full.min.js"></script>
@endsection

<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
})

</script>
