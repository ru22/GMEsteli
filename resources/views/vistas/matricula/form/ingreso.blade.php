
<section class="content">
    <div class="row">
        <section class="content container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                    <div class="form-group">
                        <label>Estudiante:</label>
                        <select name="idestudiantes" class="form-control selectpicker" data-live-search="true">
                                 
                        </select>
                     </div>
                   </div>
                </div>  
              <div>  
            
            <div class="tab-content">
          
                {!!Form::open(['route'=>'ingreso.store','method'=>'POST'])!!}
                {{Form::Token()}}
                 <div class="row">
                     <div class="row container-fluid ">
                     <div class="panel panel-primary ">
                      <div class="panel-body ">
                          <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                              <label>Nombres:</label>
                                <div class="form-group">
                                  <input type="text" name="nombrese" class="form-control">
                              </div>
                                <label>Apellidos:</label>
                                <div class="form-group">
                                  <input type="text" name="apellidose" class="form-control">
                                </div>
                                <label>Procedencia:</label>
                               <div class="form-group">
                                  <input type="text" name="procedencia" class="form-control">
                               </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                              <label>Fecha:</label>
                                <div class="form-group">
                                  <input name="fnac" type="text" class="form-control">
                                </div>
                                
                                <label>Sexo:</label>
                                  <div class="form-group">
                                    <select name="sexo" class="form-control">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                                <label>Direccion:</label>

                                
                          </div>
                          <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                      <input type="text" name="direccion" class="form-control">
                                    </div>
                                  </div>
                                </div>
                      </div>              
                      </div>
                 
                    <div class="row">
                                        
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                       
                        <label>Nombres:</label>
                          <div class="form-group">
                            <input name="nombres" type="text" class="form-control">
                         </div>
                          <label>Apellidos: </label>
                          <div class="form-group">
                           <input name="apellidos" type="text" class="form-control">
                          </div>
                          <label>Parentesco:</label>
                          <div class="form-group">
                            <input name="parentesco" type="text" class="form-control">
                          </div>
                          <label>Ocupacion:</label>
                          <div class="form-group">
                            <input name="ocupacion" type="text" class="form-control">
                         </div>
                    </div>
                       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <label>Lugar de trabajo:</label>
                          <div class="form-group">
                           <input name="lugar_trabajo" type="text" class="form-control">
                         </div>
                         <label>Telefono:</label>
                          <div class="form-group">
                           <input name="telefono" type="text" class="form-control">
                          </div>
                          <label>Cedula:</label>
                          <div class="form-group">
                            <input name="cedula" type="text" class="form-control">
                          </div>
                         
                      </div> 
                    </div>
                     <button type="submit" class="btn btn-primary">guardar</button>
                     </div>
                  
                  {!!Form::close()!!}
              </div>
            </div>
        </section>
    </div>
</section>







