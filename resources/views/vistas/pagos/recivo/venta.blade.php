<!DOCTYPE html>
<html>
<head>
  <title></title> 

   <style>
  
   table{
    background: transparent;
    border: 1px solid #000;
    border-collapse: collapse;
    width: 100%;
   }
   table td{
    border: 1px solid #000;
    padding: 20px;

   }
   h3{
    text-align: center;
   }
   #asig{

    /*width: 150px;*/

    /*border: thick;*/
   }
   #f{

    border: thick;
   }
   </style>
</head> 
<body>

<div class="container">
     <header>
         <h3<h1><img src="img/sos.jpg" width="100px"> Colegio SOS Hermann Gmeiner  de Estelí</h3>
     </header>
     <br>
     <br>
           <p class="pull-right"><label ><span>N0 Comprobante:</span></label>{{$venta->num_comprovante}}</p>
           <p><label ><span>Nombre:</span></label>{{$venta->nombrese}}</p>
           <p><label ><span>Apellidos:</span></label>{{$venta->apellidose}}</p>
         
    <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover table table-responcive">
              <thead style="background-color:#A9D0F5">
              <tr>
                
                  <th>Producto</th>
                  <th>Forma de pago</th>
                  <th>Cantidad</th>
                  <th>Monto</th>
                  <th>Sudtotal</th>
               
              </tr>
              </thead>
              <tbody>
            @foreach($detalle as $deta)
                <tr>
        
                
                <td>{{$deta->producto}}</td>
                 <td>{{$deta->forma}}</td>
                <td>{{$deta->cantidad}}</td>
                <td>{{$deta->monto}}</td>
                <td>{{$deta->cantidad*$deta->monto}}</td>
                  
                </tr>    
            @endforeach
            </tbody>
            </table>
          </div>
        </div>
  
    <br>
    <h3 class="pull-right" id="total">Total_compra:{{$venta->total_venta}}C$</h3>
    <br>
    <br>
        <table id="f">

          <thead>
            <th>_______________________<br><small>Firma de Caja</small></th>
          </thead>
        </table>

       
   </div>
</body>
</html>



   