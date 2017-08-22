
<div class="row"> 

          <div class="container-fluid">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <div class="table-responsive">
                <table id="table_est" class="display  table-hover">
                  <thead style="background-color:#A9D0F5">
                  <tr>
                     
                       <th>Nombres</th>
                       <th>Apellidos</th>
                       <th>colegio-Procedencia</th>
                       <th>Repitente</th>
                       <th>Anio-aprovado</th>
                       <th>Nacimiento</th>
                       <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($matriculas as $matri)
                    <tr>
                     
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
                    @endforeach
                    </tbody>
                </table>
              </div>
           </div>
         </div>

</div>