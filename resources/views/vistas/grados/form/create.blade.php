<div class="">
    <div class="panel panel-primary ">
        <div class="panel-body">
            <div class="row">
                 <div class=" col-md-6">
                    <label>Grados</label>
                     <div class="form-group">
                        <input type="text" name="grado" class="form-control">
                     </div>
                </div>
            </div> 
        </div> 
    </div> 

<div>
       
    <div> 

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Asignaturas</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sección</a></li>
      </ul><br>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="form-group">
                <div class="tab-content container-fluid">
                    
                    <div class="col-lg-10  col-md-8">
                        <div class="form-group">
                            <label>Asignaturas</label>
                                <input type="text" name="asignaturas" id="asignaturas" class="form-control" >
                        </div>
                    </div><br>
 
                    <div class="col-lg-1 ">
                        <div class="form-group">
                            <button type="button" id="asignatura" onclick="agregarp();" class="btn btn-primary">+</button>    
                        </div>
                    </div>

                    <table id="detalle" class="table tble-striped table-bordered tabla-condensed table-hover">
                        <thead>
                            <th>Opciones</th>
                            <th>Asignaturas</th>
                        </thead>
                        <tfoot>
                                        
                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>
                   
                </div>
            </div> 
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">

            <div class="tab-content container-fluid">
                <div class="col-lg-10  col-md-8">
                    <div class="form-group">
                        <label>Sección</label>
                        <input type="text" name="seccion" id="pidseccion" class="form-control" >
                     </div>
                </div><br>

                <div class="col-lg-1 ">
                    <div class="form-group">
                        <button type="button" id="seccion" onclick="agre();" class="btn btn-primary">+</button>    
                    </div>
                </div>


                <table id="deta" class="table tble-striped table-bordered tabla-condensed table-hover">
                    <thead>
                        <th>Opciones</th>
                        <th>Asignaturas</th>
                    </thead> 
                    <tfoot>
                                        
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>

            </div><br>
        </div>
      </div>

    </div> 

    </div>
</div> 
@section('scripts')
        {!!Html::script('bootstrap/js/asignaturas.js')!!}
        {!!Html::script('bootstrap/js/seccion.js')!!}
@endsection



