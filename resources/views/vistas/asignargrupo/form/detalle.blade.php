
<div class="row"> 
    <div class="container-fluid">     
      <div class="row">

      
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
                  <thead style="background-color:#A9D0F5">
                  <tr>
                      <th>Seccion</th>
                      <th>Perio</th>
                      <th>Grupos</th>
                      <th>Grados</th>
                   
                      <th>Opciones</th>
                     
                  </tr>
                  </thead>
                @foreach($detalle as $detalle)
                    <tr>
                      <td>{{$detalle->idseccion}}</td>
                      <td>{{$detalle->idannios}}</td>
                      <td>{{$detalle->idgrados}}</td>
                      <td>{{$detalle->idgrupos}}</td>
                    <td>
                       <a href="" target="_blank"> <button class="btn btn-info">Imprimir</button></a>
                    </td>
                  </tr>    
               @endforeach
                </table>
              </div>
      </div>
</div>     
