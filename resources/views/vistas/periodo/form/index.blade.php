<div class="box box-primary container-fluid"> 
<div class="row"> 

          <div class="container-fluid">

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="container-fluid">
                  <h3>Lista periodo<small><button class="btn btn-info pull-right" data-toggle="modal" data-target="#periodo">Nuevo +</button></small></h3>
                  @include('vistas.periodo.form.modal1')            
                 </div><br>
              <div class="table-responsive">
                <table class="table">
                  <thead >
                      <th>codigo</th>
                      <th>Nombre</th>
                      
                        
              
                      <th>Opciones</th>
                  </thead>
                  @foreach ($lista as $lista)
                      <tr>
                    <th>{{$lista->idannios}}</th>
                       <th>{{$lista->periodo}}</th>
                        <td>
                          <a href="" data-target="" data-toggle="modal"><button class="btn btn-info">X</button>
                
                        </td>
                      </tr>
                       
                  @endforeach 
                </table>
              </div>

         
         </div>
 
</div>
</div>
