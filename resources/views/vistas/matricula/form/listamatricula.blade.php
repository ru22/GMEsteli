
<div class="row">

          <div class="container-fluid">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <div class="table-responsive">
                <table id="" class="table table-striped table-bordered table-condensed table-hover">
                  <thead style="background-color:#A9D0F5">
                      <th>Codio</th>
                       <th>Nombres</th>
                       <th>Apellidos</th>
                       <th>colegio-Procedencia</th>
                       <th>Repitente</th>
                       <th>Ultimo-anio-aprovado</th>
                       <th>Fcha-Nacimiento</th>
                       <th>Opciones</th>
                  </thead>
                  @foreach($matriculas as $matri)
                    <tr>
                      <td>{{$matri->id}}</td>
                      <td>{{$matri->nombrese}}</td>
                      <td>{{$matri->apellidose}}</td>
                      <td>{{$matri->colegio_procedencia}}</td>
                      <td>{{$matri->repitente}}</td>
                      <td>{{$matri->ultimo_anio_aprovado}}</td>
                      <td>{{$matri->fnac}}</td>
                       <td>
                          <a href="{{URL::action('matriculaController@show',$matri->id)}}}"><button class="btn btn-info">Detalle</button>
                           <a href="" ><button class="btn btn-danger">Editar</button>
                          <a href="" ><button class="btn btn-danger">Eliminar</button>
                        </td>
                      </tr>
                    </tr>
                    @endforeach
                </table>
              </div>
           </div>
         </div>

</div>