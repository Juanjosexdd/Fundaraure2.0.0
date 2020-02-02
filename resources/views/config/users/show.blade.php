@extends('layouts.templete')

@section('title','Editar Usuario')

@section('styles')

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
          <li class="breadcrumb-item active"><a href="{{ route('config.users.index') }}">Usuarios</a> </li>
          <li class="breadcrumb-item active">Perfil</a> </li>
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
        <!-- <div class="card-header with-border mailbox-controls">
          <h3 class="card-title">&nbsp;&nbsp;Perfil de {{ $user->name}} </h3>
          <div class="btn-group float-right">
            <a href="{{ route('config.users.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm"><i class="fas fa-reply text-teal"></i></a>
          </div>
        </div> -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-5 offset--1">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-teal">
                        <h3 class="widget-user-username"> {{ $user->name}} </h3>
                        <h5 class="widget-user-desc">Founder & CEO</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="/templete/dist/img/user1-128x128.jpg" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <span class="description-text m-auto">DEPARTAMENTO: ADMINISTRACIÓN </span>
                            <a href="{{route('config.users.edit', $user->id)}}" class="btn bg-teal btn-default btn-block btn-sm"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-1">
              <div class="row content-beetwend">
                <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Contacto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false">Empresa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Settings</a>
                  </li>
                </ul>
                <br>
                <div class="tab-content" id="custom-content-above-tabContent">
                  <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                    <br>
                    <span class="description-text m-auto">
                      <i class="fa fa-fw fa-user"></i> 
                      NOMBRES:  {{ $user->name}}
                    </span>
                    <hr>
                    <span class="description-text m-auto">
                      <i class="fa fa-fw fa-phone"></i> 
                      APELLIDOS:  {{ $user->last_name}}
                    </span>
                    <hr>
                    <span class="description-text m-auto">
                      <i class="fa fa-fw fa-phone"></i>
                      CEDULA:  {{ $user->cedula}}
                    </span>
                    <hr>
                    <span class="description-text m-auto">
                      <i class="fa fa-fw fa-phone"></i>
                      GENERO:  {{ $user->genero}}
                    </span>
                    <hr>
                  </div>
                  <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                    <br>
                    <span class="description-text m-auto">
                      <i class="fa fa-fw fa-phone"></i>
                      TELEFONO:  0424-5555400
                    </span>
                    <hr>
                    <span class="description-text m-auto">
                      <i class="far fa-fw fa-envelope"></i>
                      EMAIL: {{ $user->email }}
                    </span>
                    <hr>
                    <span class="description-text m-auto">
                      DIRECCIOÓN: Araure Edo Portuguesa
                    </span>
                    <hr>
                  </div>
                  <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
                    <br>
                    <span class="description-text m-auto">
                      Rol:  Administrador
                    </spa>
                    <hr>
                    <span class="description-text m-auto">
                      Dpto: Administración
                    </spa>
                    <hr>
                    <span class="description-text m-auto">
                      ULTIMA ACTUALIZACIÓN:  {{ $user->updated_at->format('d/m/Y')}}
                    </span>
                    <hr>
                    <span class="description-text m-auto">
                      REGISTRADO EL:   {{ $user->created_at->format('d/m/Y')}}
                    </span>
                    <hr>
                  </div>
                  <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">
                    <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, in? Enim exercitationem, ipsum aliquam a blanditiis eos quas optio tenetur minus consequuntur ea quia vel totam cumque, ducimus accusamus odit?
                  </div>
                  
              </div>
            </div>
            <!-- <div class="col-md-1">
              <div class="row">
                <div class="float-right">
                  <a href="{{ route('config.users.index') }}" title="Volver" data-toggle="tooltip" data-placement="left" class="btn btn-default btn-sm float-right"><i class="fas fa-reply text-teal"></i></a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')

@endsection