@extends('layouts.admin')
@section('content')
  
<div class="box box-primary container-fluid"> 
  <div class="container-fluid">
      <div class="row">
        <section>

          <div class="">
              <div class="wizard-inner"><br>
              <h3 class="cal_titulo">Lista de matriculados</h3>
         
                <div class="cow"> 
                  <div class="col-md-3"> 
                    <div class="form-group">
                      <input type="text" name="codigo" id="text_buscar" class="form-control" placeholder="Buscar..." >
                    </div>
                  </div>
                </div>

                <div class="row"> 
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="table-responsive">
                      <table class="table">

                                <thead> 
                                <tr>
                                   <th>Codigo</th>
                                     <th>Nombres</th>
                                     <th>Apellidos</th>
                                     <th>Opciones</th>
                                     
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($matriculas as $matri)
                                  <tr>
                                   
                                    <td>{{$matri->codigo}}</td>
                                    <td>{{$matri->nombrese}}</td>
                                    <td>{{$matri->apellidose}}</td>
                                     <td>
                                        <a href="matricula/{{$matri->id}}"><button class="btn btn-info">Ver <span class="glyphicon glyphicon-eye-open"></span></button>
                                        <a href="perfil/{{$matri->id}}" data-target="" data-toggle="modal"><button class="btn btn-info">Perfil <span class="glyphicon glyphicon-user"></span></button>
                                        
                                      </td>
                                    
                                  </tr>
                                  @endforeach
                                  </tbody>
                      </table>
                     </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
     </div>
  </div>
</div>
@stop