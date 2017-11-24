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
     <table>
        <thead>
        @foreach($pagos as $m) 
            
            <th>Codigo<p>{{$m->codigo}}</p></p></th>
            <th> Nombres<p>{{$m->nombrese}}</p></th>
            <th>Apellidos<p>{{$m->apellidose}}</p></th>
          @endforeach
      
        
      


          @foreach($detalle as $detalle)

         
              <th>forma de pago<p>{{$detalle->formato_pago}}</p></th>
              <th>Mes<p>{{$detalle->mes}}</p></th>
              <th>monto<p>{{$detalle->monto}}</p></th>
              <th>Perido<p>{{$detalle->periodo}}</td>
                  
          @endforeach
        </thead>
     </table>
    <br>
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



   