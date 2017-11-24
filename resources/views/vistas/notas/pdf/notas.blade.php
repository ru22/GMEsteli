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
            <th>Nombres y Apellidos: {{$m->nombrese}} {{$m->apellidose}}</th>
            <th>Grado: {{$m->grado}}</th>
             <th>Periodo: {{$m->periodo}}</th>
          @endforeach

        </thead>
     </table><br>


     <table>
        <thead>
       
          <th>Asignaturas</th>
          <th>IP</th>
          <th>IIP</th>
          <th>NS</th>
          <th>IIIP</th>
          <th>IVP</th>
          <th>NS</th>
          <th>NF</th>
     
        </thead>
        
           @foreach($calificaciones as $calificaciones)
           <tr>
          <tbody> 

            <td>{{$calificaciones->nombre}}</td>
            <td>{{$calificaciones->IP}}</td>
            <td>{{$calificaciones->IIP}}</td>
            <td>{{$calificaciones->NS}}</td>
            <td>{{$calificaciones->IIIP}}</td>
            <td>{{$calificaciones->IVP}}</td>
            <td>{{$calificaciones->NSS}}</td>
            <td>{{$calificaciones->NF}}</td>

          </tbody>
           </tr>
           @endforeach
         
     </table>

        <table id="f">

          <thead>
            <th>_____________________<br><small>Firma del apoderado</small></th>
            <th>_______________________<br><small>Dodente educativo</small></th>
          </thead>
        </table>

       
   </div>
</body>
</html>
