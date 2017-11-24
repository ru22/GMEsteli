@extends('layouts.admin')
@section('content')
    <div class="box box-primary container-fluid"> 
        <div class="row container-fluid">
            <h3>perfil de estudainte</h3>
            <hr/>
        </div> 

        <div class="row container-fluid">
            <div  class="col-md-4">
                <img  id="perfil" src="/img/usuario.jpg" width="100px"  alt="User Image">
                <div>
                    @foreach($estudiantes as $matri)
                        <h4><label class="label label-success">{{$matri->nombrese}} {{$matri->apellidose}}</label></h4>
                     @endforeach

                    <div class="row container-fluid">
                      <button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Editar Perfil</button>
                    </div>
                </div>
            </div> 
            
                <div class="col-lg-6">
                    <div class="container-fluid">
                     <h4><label class="label label-success">Datos del estudiante</label></h4>
                     <hr/>
                        @foreach($estudiantes as $matri)
                            <tr>
                                <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Codigo</th>:.................................. <td>{{$matri->codigo}}</td><br>
                                <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Nombres</th>:............................... <td>{{$matri->nombrese}}</td><br>
                                <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Apellidos</th>:................................<td>{{$matri->apellidose}}</td><br>
                                <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Direccion</th>:............................... <td>{{$matri->direccion}}</td><br>
                                <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Fecha</th>:................................... <td>{{$matri->fnac}}</td><br>
                                <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Sexo</th>:.................................... <td>{{$matri->sexo}}</td><br>                                     
                            </tr>
                        @endforeach
                            <h4><label class="label label-success">Datos del tutor</label></h4>
                             <hr/>
                         @foreach($estudiantes as $matri)
                                    <tr>
                                    <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Nombres</th>:.............................................. <td>{{$matri->nombres}}</td><br>
                                    <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Apellidos</th>:............................................ <td>{{$matri->apellidos}}</td><br>
                                    <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Cedula</th>:............................................... <td>{{$matri->cedula}}</td><br>
                                    <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Telefono</th>:............................................. <td>{{$matri->telefono}}</td><br>
                                    <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Ocupación</th>:........................................... <td>{{$matri->ocupacion}}</td><br>
                                    <th><label class="label label-success"><span class="glyphicon glyphicon-ok"></label> </span> Lugar de trabajo</th>:.................................... <td>{{$matri->lugar_trabajo}}</td><br>
                                                                
                                    </tr>
                         @endforeach
                    </div><br>
                </div>
            </div> 
       </div>
    </div>
@stop