@extends('layouts.templete')

@section('title','Tipos de cliente')

@section('styles')
  <link rel="stylesheet" href="/templete/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/templete/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="/templete/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
          <li class="breadcrumb-item active"><a href="{{ route('tcliente.index') }}">Tipo cliente</a> </li>
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
          <h3 class="card-title">&nbsp;&nbsp;Listado de tipos de clientes</h3>
          <div class="btn-group float-right">
            <a href="{{ route('tcliente.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm"><i class="fas fa-reply text-info"></i></a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-1 m-1">
			<div class="col-md-10 offset-1">
                <blockquote>
                    <span class="inline"><h3><strong> Descripcion:</strong></h3><h4> {{ $tcliente->descripcion}}</h4></span>
                </blockquote>
                <a href="{{route('tcliente.edit', $tcliente->id)}}" class="btn bg-info btn-default btn-block btn-sm"><i class="fa fa-edit"></i> Editar</a>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
@endsection


