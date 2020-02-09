@extends('layouts.templete')

@section('title','Editar tipo cliente')

@section('styles')
<!-- <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
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
          <li class="breadcrumb-item active"><a href="{{ route('tcliente.index') }}">Tipo Cliente</a> </li>
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
    <div class="col-xs-12">
      <div class="card card-solid card-default">
        <div class="card-header with-border mailbox-controls">
          <h2 class="card-title"> <i class="fa fa-edit text-warning"></i> Editar datos de {{$tcliente->nombre}}</h2>
          <a href="{{ route('tcliente.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-1 float-right">&nbsp;&nbsp;<i class="fas fa-reply text-teal"></i>&nbsp;&nbsp;</a>
        </div>
        <div class="card-body">
          <div class="col-md-12">
            {!! Form::model($tcliente, ['route' => ['tcliente.update', $tcliente->id],'method' => 'PUT', 'files' => true])!!}
              @method('PUT')
              @include('config.tcliente.partials.form',['btnText'=>'Enviar'])
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection

{{-- <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-purple',
      radioClass: 'iradio_square-purple',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection --}}