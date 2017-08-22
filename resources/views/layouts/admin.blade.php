<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sistema de matricula</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- AdminLTE App -->
    {!!Html::style('plantilla/css/bootstrap.min.css')!!}
      <!-- tablas-->
    {!!Html::style('tablas/jquery.dataTables.min.css')!!}
        <!-- fin-->
    {!!Html::style('boosttrac_selec/css_select.css')!!}

    {!!Html::style('plantilla/css/font-awesome.css')!!}
    {!!Html::style('plantilla/css/AdminLTE.min.css')!!}
    {!!Html::style('plantilla/css/_all-skins.min.css')!!}
    {!!Html::style('plantilla/img/apple-touch-icon.png')!!} 
    {!!Html::style('plantilla/img/favicon.ico')!!} 
    <!-- AdminLTE fin de estilo-->
   
</script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SO</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SitemaMatricula</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">En Linea</small>
                  <span class="hidden-xs">{{ Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p> 
                     {{ Auth::user()->email}}
                  
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/')}}" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
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
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Matricula</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/matricula')}}"><i class="fa fa-circle-o"></i>Matriculas</a></li>
                <li><a href="{{url('/matricula/create')}}"><i class="fa fa-circle-o"></i>Nuevo Matriculas</a></li>
                <li><a href="{{url('/matricula/create')}}"><i class="fa fa-circle-o"></i> Nueva Matricula</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Ingreso Estudiantes</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/ingreso')}}"><i class="fa fa-circle-o"></i>Estudiantes</a></li>
                <li><a href="{{url('/ingreso/create')}}"><i class="fa fa-circle-o"></i>Nuevo Estudiante</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
              @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      <!-- AdminLTE App   -->
     <!-- {!!Html::script('plantilla/js/jQuery-2.1.4.min.js')!!} -->
  

        <!-- tablas  -->
        {!!Html::script('tablas/jquery-3.2.1.min.js')!!}
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}
        {!!Html::script('tablas/main.js')!!}
      <!-- tablas fin -->
       {!!Html::script('boosttrac_selec/js_select.js')!!}
      <!-- Bootstrap 3.3.5 -->
       {!!Html::script('plantilla/js/bootstrap.min.js')!!}
      
      <!-- AdminLTE App -->
       {!!Html::script('plantilla/js/app.min.js')!!}
       <!-- AdminLTE fin de Admin de su js -->


  </body>
</html>


