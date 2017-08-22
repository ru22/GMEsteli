
<div class="row"> 

          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
           
              <div class="table-responsive">
                <table id="table_est" class="display">
                  <thead style="background-color:#A9D0F5">
                    
                      <th>Nombres y Apellidos</th>
                      
                      <th>Procedencia</th>
                      <th>F.Nacimiento</th>
                      <th>Sexo</th>
                      <th>Direccion</th>
                      <th>Datos del Padre</th>
                     
                      <th>Opciones</th>
                  </thead>
                  @foreach ($estudiantes as $est)
                      <tr>
                      
                        <td>{{$est->nombrese.'-'.$est->apellidose}}</td>
                      
                        <td>{{$est->procedencia}}</td>
                        <td>{{$est->fnac}}</td>
                        <td>{{$est->sexo}}</td>
                        <td>{{$est->direccion}}</td>
                        <td>{{$est->nombres.'_'.$est->apellidos}}</td>
                
                        <td>
                          <a href="" data-target="#modal-edit-{{$est->id}}" data-toggle="modal"><button class="btn btn-info">Ed</button>
                          <a href="" ><button class="btn btn-danger">X</button>
                        </td>
                      </tr>
                    
                   @endforeach
                </table>
              </div>

         
         </div>
  </div>
</div>
