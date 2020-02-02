<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | {{ config('app.name', 'Fundaraure') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/templete/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/templete/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/templete/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/templete/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @yield('styles')
</head>
<body class="hold-transition sidebar-mini text-sm accent-teal">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="/templete/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-teal">
            <img src="templete/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              {{ Auth::user()->name }} - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#"> </a>
              </div>
              <div class="col-4 text-center">
                <a href="#"> </a>
              </div>
              <div class="col-4 text-center">
                <a href="#"> </a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 text-sm sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-light">
      <img src="/templete/dist/img/favicon2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-4"
           style="opacity: ">
      <span class="brand-text font-weight-light">Fundaraure</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/templete/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="teal">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-header"> NAVEGACIÓN PRINCIPAL</li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                FACTURACIÓN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Estatus Fatura</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Forma de Pago</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Generar Factura</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link"></i>
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Servicios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                CONFIGURACÓN
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-globe-americas"></i>
              <p>
                ÁREA GEOGRÁFICA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>País</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Estado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Municipio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Parroquia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=""
                  class="nav-link">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Sector</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview
            {{ setActive('cargo.index')}}
            {{ setActive('cargo.edit')}}
            {{ setActive('cargo.create')}}
            {{ setActive('cargo.show')}}
            {{ setActive('dpto.index')}}
            {{ setActive('dpto.edit')}}
            {{ setActive('dpto.create')}}
            {{ setActive('dpto.show')}}
            {{ setActive('tcliente.index')}}
            {{ setActive('tcliente.edit')}}
            {{ setActive('tcliente.create')}}
            {{ setActive('tcliente.show')}}">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                ORGANIZACIÓN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @can('cargo.index')
              <li class="nav-item">
                <a href="{{ route('cargo.index' )}}"
                class="nav-link
                  {{ setActive('cargo.index')}}
                  {{ setActive('cargo.edit')}}
                  {{ setActive('cargo.create')}}
                  {{ setActive('cargo.show')}}">
                  <i class="fab fa-hackerrank"></i>
                  <p>Cargo</p>
                  <span class="right badge badge-success">Nuevo</span>
                </a>
              </li>
              @endcan
              @can('dpto.index')
              <li class="nav-item">
                <a href="{{ route('dpto.index' )}}"
                  class="nav-link
                  {{ setActive('dpto.index')}}
                  {{ setActive('dpto.edit')}}
                  {{ setActive('dpto.create')}}
                  {{ setActive('dpto.show')}}">
                  <i class="fa fa-building"></i>
                  <p>Departamentos</p>
                  <span class="right badge badge-success">Nuevo</span>
                </a>
              </li>
              @endcan
              @can('empresa.index')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-university"></i>
                  <p>Empresa</p>
                  <span class="right badge badge-danger">Falta</span>
                </a>
              </li>
              @endcan
              @can('tcliente.index')
              <li class="nav-item">
                <a href="{{ route('tcliente.index' )}}" 
                  class="nav-link 
                    {{ setActive('tcliente.index')}}
                    {{ setActive('tcliente.edit')}}
                    {{ setActive('tcliente.create')}}
                    {{ setActive('tcliente.show')}}">
                  <i class="far fa-check-square"></i>
                  <p>Tipos de clientes</p>
                </a>
              </li>
              @endcan
              
            </ul>
          </li>
          <li class="nav-item has-treeview
            {{ setActive('config.users.index')}}
            {{ setActive('config.users.show')}}
            {{ setActive('config.users.create')}}
            {{ setActive('config.users.edit')}}
            {{ setActive('config.users.trashed')}}
            {{ setActive('roles.index')}}
            {{ setActive('roles.create')}}
            {{ setActive('roles.edit')}}
          ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                SEGURIDAD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('config.roles.index')
              <li class="nav-item">
                <a href="{{ route('roles.index')}}"
                  class="nav-link
                    {{ setActive('roles.index')}}
                    {{ setActive('roles.create')}}
                    {{ setActive('roles.edit')}}
                  ">
                  <i class="far fa-check-square"></i>
                  <p>Roles</p>
                </a>
              </li>
              @endcan
              @can('config.users.index')
              <li class="nav-item">
                <a href="{{ route('config.users.index') }}"
                  class="nav-link 
                  {{ setActive('config.users.index')}}
                  {{ setActive('config.users.show')}}
                  {{ setActive('config.users.create')}}
                  {{ setActive('config.users.edit')}}
                  {{ setActive('config.users.trashed')}}
                ">
                  <i class="fas fa-users-cog"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('migas')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
    <a id="back-to-top" href="#" class="btn btn-warning back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/templete/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/templete/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/templete/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/templete/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/templete/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/templete/dist/js/demo.js"></script>
<script src="sweetalert.min.js"></script>

@yield("scripts")
@yield("datatables")
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

</body>
</html>
