@if(Session::has('flash_message'))
      <div class="alert alert-danger alert-dismissible text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"> &times; </span>
          </button>

          <strong><i class="fa fa-info-circle"></i></strong>{{Session::get('flash_message')}}
                          
      </div>
                      
@endif
  <div class="row container-fluid"> 
    <div class="box box-primary">
            <div class="container-fluid">

              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"> 
                  <div class="container-fluid">
                 
                   </div><br>
                   <div class="row">
                   <div class="row container-fluid">
                   <h3 class="cal_titulo">Lista de Grados</h3>
                      <small><button class="btn btn-info pull-right" data-toggle="modal" data-target="#Mimodal">Nuevo <span class="glyphicon glyphicon-plus"></span></button></small>
                    </div>
                     @include('vistas.grados.form.modal1')

                      <div class="col-lg-4">
                       <!-- <input type="text" class="form-control" id="dato"><small><button type="button" class="btn btn-info btn-flat" onclick="buscargrado();">Buscar...</button></small> -->

                    <div class="input-group ">
                      <input type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-info btn-flat"  ><span class="glyphicon glyphicon-search"></span></button>
                          <!-- onclick="buscargrado();" -->
                        </span>
                     </div>
                              
                     </div>
                   </div>
                <div class="table-responsive">
                  <table class="table" >
                    <thead >
                          
                        <th>Codigo</th>
                         <th>Grados</th>  
                          <th>Opciones</th>
                    </thead>
                   @foreach ($grados as $grados)
                        <tr>
                         <td>{{$grados->id}}</td>
                          <td>{{$grados->grado}}</td>
                          <td>
                            <a href="" data-target="" data-toggle="modal"><button class="btn btn-info">Ed</button>
                            <a href="" data-target="" data-toggle="modal"><button class="btn btn-danger" >X</button>
                           
                          </td>
                        </tr>
                   @endforeach

                  </table>
                </div>
           </div>
  </div>
</div>
