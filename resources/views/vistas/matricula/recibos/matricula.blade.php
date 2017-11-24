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
         <h3> Colegio SOS Hermann Gmeiner  de Estelí</h3>

     </header>
     <table>
        <thead>
        
          @foreach($matriculas as $m) 
            
            <th>Codigo<p>{{$m->codigo}}</p></p></th>
            <th> Nombres<p>{{$m->nombrese}}</p></th>
            <th>Apellidos<p>{{$m->apellidose}}</p></th>
          @endforeach
      
          @foreach($detalle as $detalle)
           
              <th>Turno<p>{{$detalle->tuno}}</p></th>
              <th>Grado<p>{{$detalle->grado}}</p></th>
              <th>Sección<p>{{$detalle->seccion}}</p></th>
              <th>Perido<p>{{$detalle->periodo}}</td>
                  
          @endforeach
        </thead>
     </table>
    <h4>ASIGNATURAS</h4>
    <table id="asig">
      <thead>
      @foreach($asignaturas as $asignaturas)
     
        <th><p>{{$asignaturas->nombre}}</p></th>
     
      @endforeach
      </thead>
        <br>
        <br>
    </table>
        <table id="f">

          <thead>
            <th>_______________________<br><small>Firma del apoderado</small></th>
            <th>_______________________<br><small>Dodente educativo</small></th>
          </thead>
        </table>

       
   </div>
</body>
</html>



   