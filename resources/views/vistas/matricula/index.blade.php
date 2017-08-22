@extends('layouts.admin')
@section('content')
 
     <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de Estudiantes</h3>
          <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <div class="row">
              <div class="col-md-12">
                <!--Contenido-->
                
             @include('vistas.matricula.form.listaestudiantes')
                <!--Fin Contenido-->
              </div>
            </div>      
          </div> 
        </div><!-- /.row -->
      </div><!-- /.box-body -->  
    </div><!-- /.box -->
  </div><!-- /.col --> 
              
@stop



 