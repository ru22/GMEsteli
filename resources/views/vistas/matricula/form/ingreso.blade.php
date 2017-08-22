
<section class="content">
    <div class="row">
        <section class="content container-fluid">
          <div>
          <!-- Nav tabs -->
             <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Estudiante</a></li>
                 <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Padres</a></li>
                                   
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">  
                {!!Form::open(['route'=>'ingreso.store','method'=>'POST'])!!}
                {{Form::Token()}}
                 <div class="row">
                  <div class="panel panel-primary ">
                   <div class="panel-body ">
                     <div class="row">
                          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
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
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                              <label>Fecha:</label>
                                <div class="form-group">
                                  <input name="fnac" type="text" class="form-control">
                                </div>
                                <label>Direccion:</label>
                                <div class="form-group">
                                  <input type="text" name="direccion" class="form-control">
                                </div>
                                <label>Sexo:</label>
                                  <div class="form-group">
                                    <select name="sexo" class="form-control">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                      </div>              
                      </div>
                    </div>
                  </div> 
                </div>
              <div role="tabpanel" class="tab-pane" id="profile"><br>
                <div class="row">
                      

                  <div class="panel panel-primary ">
                   <div class="panel-body ">   

               

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
                   </div>
                  </div>
                  {!!Form::close()!!}
              </div>
            </div>
        </section>
    </div>
</section>







