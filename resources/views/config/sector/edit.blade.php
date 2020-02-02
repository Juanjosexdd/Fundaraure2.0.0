@extends('layouts.templete')

@section('title','Editar Sector')

@section('styles')
<!-- <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
@endsection

@section('migas')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Configuración</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item">Configuración</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('sector.index') }}">Sector</a> </li>
          <li class="breadcrumb-item active">Editar</a> </li>
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
          <h2 class="card-title"> <i class="fa fa-edit text-warning"></i> Editar datos {{$sector->nombre}}</h2>
          <div class="btn-group float-right">
            <a href="{{ route('sector.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm"><i class="fas fa-reply text-info"></i></a>
          </div>
        </div>
        <div class="card-body">
          <div class="col-md-8 offset-2">
            {!! Form::model($sector, ['route' => ['sector.update', $sector->id],'method' => 'PUT'])!!}
              @method('PUT')
              @include('sector.partials.form',['btnText'=>'Enviar'])
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