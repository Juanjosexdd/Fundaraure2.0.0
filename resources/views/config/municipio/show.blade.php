@extends('layouts.templete')

@section('title','Detalle Municipio')

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
          <li class="breadcrumb-item">Configuración</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('municipio.index') }}">Municipio</a> </li>
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
          <h3 class="card-title">Detalle municipio {{ $municipio->nombre }} </h3>
          <div class="btn-group float-right">
            <a href="{{ route('municipio.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm"><i class="fas fa-reply text-info"></i></a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-1 m-1">
          <div class="col-md-10 offset-1">
            <div class="callout callout-info">
              <h5> Nombre: </h5>
              <p>{{ $municipio->nombre}}</p>
              <hr>
              <h5> Abreviatura: </h5>
              <p>{{ $municipio->abreviado}}</p>
              <hr>
              <h5> Estatus: </h5>
              <p>{{ $municipio->estatus}}</p>
            </div>
            <a href="{{route('municipio.edit', $municipio->id)}}" class="btn bg-info btn-default btn-block btn-sm"><i class="fa fa-edit"></i> Editar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection


