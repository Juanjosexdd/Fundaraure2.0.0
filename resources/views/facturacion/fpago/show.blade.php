@extends('layouts.templete')

@section('title','Detalle Cargo')

@section('styles')

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
          <li class="breadcrumb-item"> <a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('configuracion.index')}}">Configuración</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('cargo.index') }}">Cargo</a> </li>
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
    <div class="col-xs-12">
      <div class="card card-solid card-default">
        <div class="card-header mailbox-controls">
          <h3 class="card-title">Detalle cargo {{ $cargo->nombre }} </h3>
          <div class="btn-group float-right">
            <a href="{{ route('cargo.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm elevation-2"><i class="fas fa-reply text-teal"></i></a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-1 m-1">
          <div class="col-md-12">
            <div class="callout callout-teal">
              <h5> Nombre: </h5>
              <p>{{ $cargo->nombre}}</p>
              <hr>
              <h5> Descripción: </h5>
              <p>{{ $cargo->descripcion}}</p>
              <hr>
              <h5> Estatus: </h5>
              <span class="badge badge-success">{{ $cargo->estatus}}</span>
            </div>
            <a href="{{route('cargo.edit', $cargo->id)}}" class="btn bg-teal btn-block btn-lg elevation-2"><i class="fa fa-edit"></i> Editar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection


