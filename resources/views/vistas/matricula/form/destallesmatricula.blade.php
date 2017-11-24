@extends('layouts.admin')
@section('content')
<div class="box box-primary container-fluid"> 
    <div class="row">
        <div class="container-fluid">     
          <div class="row"><br>
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <table class="table">
                      <thead>
                      <tr>

                      <th>codigo</th>
                          <th>Turno</th>
                          <th>Grado</th>
                          <th>Seccion</th>
                          <th>Periodo</th>
                     
                          <th>Opciones</th>
                      </tr>
                      </thead>
                    @foreach($matriculas as $detalle)
                        <tr>
                       
                        <td>{{$detalle->codigo}}</td>
                        <td>{{$detalle->tuno}}</td>
                        <td>{{$detalle->grado}}</td>
                        <td>{{$detalle->seccion}}</td>
                        <td>{{$detalle->periodo}}</td>
                         <td>
                             <a href="{{URL::action('recibosController@show',$detalle->id)}}" target="_blank"> <button class="btn btn-info pull-right">Imprimir</button></a>
                         </td>
                        </tr>    
                    @endforeach
                     
                    </table>
                  </div>
          </div>
    </div>     
</div>   
@stop
