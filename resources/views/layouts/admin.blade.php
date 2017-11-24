<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de | Matrícula</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {!!Html::style('plantilla/css/AdminLTE.min.css')!!}
    {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('tablas/jquery.dataTables.min.css')!!}
    {!!Html::style('boosttrac_selec/css_select.css')!!}

    {!!Html::style('tablas/datepicker.css')!!}
    {!!Html::style('plantilla/css/font-awesome.css')!!}
    {!!Html::style('plantilla/css/_all-skins.min.css')!!}
    {!!Html::style('plantilla/img/apple-touch-icon.png')!!} 
    {!!Html::style('plantilla/img/favicon.ico')!!} 
    {!!Html::style('css/modal.css')!!}
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('/Admin')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>OS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Matrícula </b>GM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/uriel.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->email}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/uriel.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->email}}
                  <small>{{ Auth::user()->name }}</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Cerrar</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    
      <!-- search form -->
      <form action="" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
        @if(auth()->user()->tipo == 1)
          <a href="#">
              <i class="glyphicon glyphicon-user"></i>
                <span>Estudiantes</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/ingreso')}}"><i class="fa fa-circle-o"></i>Nuevo Ingreso<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
            <li class="active"><a href="{{url('/estudiantes')}}"><i class="fa fa-circle-o text-aqua"></i>Lista de Estudiantes</a></li>
            <li class="active"><a href="{{url('/retirados')}}"><i class="fa fa-circle-o text-red"></i>Estuiantes Retirados</a></li>
          </ul>
        </li>
       
       <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-education"></i>
            <span>Matriculas</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">Nuevas</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/matricula')}}"><i class="fa fa-circle-o text-aqua"></i>Matriculas</a></li>
            <li><a href="javascript:void(0);" onclick="cargarlistamatricula(2);"><i class="fa fa-circle-o text-aqua"></i>Listas de Grupos</a></li>
          </ul>
        </li>
        <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-usd"></i>
                <span>Pagos de aranceles</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/pagos')}}"><i class="fa fa-circle-o text-yellow"></i>Pago de Matricula</a></li>
                <li><a href="{{url('/nuevo/create')}}"><i class="fa fa-circle-o text-yellow"></i>canselar mensualidad</a></li>
                 <li><a href="{{url('/pagos/create')}}"><i class="fa fa-circle-o text-yellow"></i>Registro de Pagos</a></li>
                <li><a href="{{url('/producto/show')}}"><i class="fa fa-circle-o text-yellow"></i>Compra de Productos</a></li>
                 <li><a href="{{url('/compra/create')}}"><i class="fa fa-circle-o text-yellow"></i>Registro de ingreso</a></li>
                 <li><a href="{{url('/venta/create')}}"><i class="fa fa-circle-o text-yellow"></i>Registro de ventas</a></li>
              </ul>
            </li>  
      
        <li class="treeview">
           <a href="#">
              <i class="glyphicon glyphicon-duplicate"></i>
                <span>Periodo escolar</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/periodo')}}"><i class="fa fa-circle-o text-aqua"></i>Perido<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
            <li><a href="{{url('/grados')}}"><i class="fa fa-circle-o text-aqua"></i>Grados<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
            <li><a href="{{url('/seccion')}}"><i class="fa fa-circle-o text-aqua"></i>Secciones<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
            <li><a href="{{url('/asignaturas')}}"><i class="fa fa-circle-o text-aqua"></i>Asignaruras<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
              <i class="glyphicon glyphicon-user"></i>
                <span>Maestros</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/maestros')}}"><i class="fa fa-circle-o text-aqua"></i>Nuevos<span class="pull-right-container"><span class="label label-primary pull-right">Nuevos</span>
            </span></a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o text-aqua"></i>Asignar grupo</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
              <i class="fa fa-edit"></i>
                <span>Form</span>
              <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        
       
      
        <li class="treeview">
         <a href="#">
              <i class="glyphicon glyphicon-user"></i>
                <span>Usuarios</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('register') }}"><i class="fa fa-circle-o text-aqua"></i>Nuevos<span class="pull-right-container"><span class="label label-primary pull-right">Nuevos</span>
            <li><a href="{{ route('register') }}">Register</a></li>
            </span></a></li>
          
          </ul>
        </li>

        @endif
        <li class="treeview">
          <a href="#">
              <i class="glyphicon glyphicon-pencil"></i>
                <span>Calificaciones</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
         
          <ul class="treeview-menu">

            <li><a href="{{url('/calificaciones')}}"><i class="fa fa-circle-o text-aqua"></i>Ingreso<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
              <li><a href="{{url('/notas')}}"><i class="fa fa-circle-o text-aqua"></i>Lista<span class="pull-right-container"><span class="label label-primary pull-right">Nuevo</span>
            </span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>

        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
   
     <section class="content" id="prin">
        @yield('content')
      </section><!-- /.content -->

      <div style="display: none;" id="car" align="center">
        <br>
        <label style="color:#000; backgroup-color:#ABB6BA, text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Espere...&nbsp;&nbsp;&nbsp;</label>
      </div>
 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017-1018 <a href="https://adminlte.io">Colegio SOS Herman Gmeiner, Estelí</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

        {!!Html::script('tablas/jquery-3.2.1.min.js')!!}
     
        {!!Html::script('plantilla/js/bootstrap.min.js')!!}
        
        {!!Html::script('plantilla/js/app.min.js')!!}
    
        {!!Html::script('boosttrac_selec/js_select.js')!!}

        {!!Html::script('tablas/bootstrap-datepicker.js')!!}
        {!!Html::script('tablas/main.js')!!}
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}

        {!!Html::script('tablas/main2.js')!!}
      
        @section('scripts')
        @show
       
        @section('tablas')
        @show

</body>
</html>