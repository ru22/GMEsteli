<div class="row">

          <div class="container-fluid">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

            <div class="row">
               <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                    <label>Nombres:</label>
                    <p>{{$matriculas->nombrese}}</p>
                  </div> 
               </div>

               <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                      <label>Apellidos:</label>
                      <p>{{$matriculas->apellidose}}</p>
                  </div> 
               </div>

                <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
                  <div class="form-group">
                      <label>Fecha:</label>
                      <p>{{$matriculas->fnac}}</p>
                  </div> 
               </div>
                  
            </div>


        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead style="background-color:#A9D0F5">
              <tr>
                
                  <th>Id</th>
                  <th>Turno</th>
                  <th>Anio-Electivo</th>
                  <th>Anio-Curso</th>
                 <th>Seccion</th>

              </tr>
              </thead>
            
                <tr>

                  @foreach($detalle as $deta)
                 <td>{{$deta->id}}</td>
                 <td>{{$deta->tuno}}</td>
                 <td>{{$deta->anio_electivo}}</td>
                 <td>{{$deta->anio_curso}}</td>
                 <td>{{$deta->seccion}}</td>
                
                  @endforeach
                </tr>
           
            </table>
          </div>
        </div>
        
      </div>
    </div>
</div>

  