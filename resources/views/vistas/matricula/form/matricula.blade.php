  {!!Form::open(['route'=>'matricula.store','method'=>'POST'])!!}
  {{Form::Token()}}

 <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
             <label>Estudiante:</label>
              <select name="idestudiantes" class="form-control selectpicker" data-live-search="true">
             @foreach($matriculas as $est)
                  <option value="{{$est->id}}">{{$est->nombrese}}-{{$est->apellidose}}</option>
              @endforeach
              </select>
          </div>
      </div>
   </div>  

<div class="row container-fluid ">
  <div class="panel panel-primary ">
  <div class="panel-body ">


 <div class="">
   <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
      <div class="row ">
      
      <div class="col-lg-2 col-sm-3 col-md-4 col-xs-12">
         <div class="form-group">
           <label>Fecha:</label>
               <div class='input-group date' id='datetimepicker1'>
                  <input name="fnac" type='text' class="form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
           </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-3 col-xs-12">
            <div class="form-group">
                <label>Repitente:</label>
                <select name="repitente" class="form-control" id="repitente">
                      <option value="No">No</option>
                      <option value="Si">Si</option>
                </select>
            </div> 
        </div>

         <div class="col-lg-2 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label>Anio Apro:</label>
                 <input name="anioaprobado" type="text" class="form-control" id="repitente">
            </div>  
        </div>


        <div class="col-lg-2 col-sm-3 col-md-3 col-xs-12">
          <div class="form-group">
             <label>Col_Procedencia:</label>
            <input type="text" name="procedencia" class="form-control" id="col_procedencia">
          </div>
        </div>
      </div> 
  


   <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
      <div class="form-group">
        <label>Turno:</label>
          <select name="pidturno" id="pidturno" class="form-control selectpicker" data-live-search="true" >
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Nocturno">Nocturno</option>
            <option value="Savatino">Savatino</option>
          </select>
        </div>
      </div>

        <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group">
              <label>Anio Electvo:</label>
              <select name="pidanio_electivo" class="form-control" id="pidanio_electivo">
                   <option value="1">2011</option>
                    <option value="2">2012</option>
                    <option value="2">2013</option>
                    <option value="2">2014</option>
                    <option value="2">2015</option>
              </select>
           </div>
        </div>

        <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12">
          <div class="form-group ">
              <label>Anio de curso:</label>
              <select name="pidanio_curso" class="form-control selectpicker" data-live-search="true" id="pidanio_curso">
              <option value="1º-Nivel-Prescolar">1º-Nivel-Prescolar</option>
              <option value="2º-Nivel-Prescolar">2º-Nivel-Prescolar</option>
              <option value="3º-Nivel-Prescolar">3º-Nivel-Prescolar</option>
              <option value="1º-Grado">1º-Grado</option>
              <option value="2º-Grado">2º-Grado</option>
              <option value="3º-Grado">3º-Grado</option>
              <option value="4º-Grado">4º-Grado</option>
              <option value="5º-Grado">5º-Grado</option>
              <option value="6º-Grado">6º-Grado</option>
              <option value="1º-Anio">1º-Anio</option>
              <option value="2º-Anio">2º-Anio</option>
              <option value="3º-Anio">3º-Anio</option>
              <option value="4º-Anio">4º-Anio</option>
              <option value="5º-Anio">5º-Anio</option>
              </select>
           </div>
        </div>

          <div class="col-lg-2 col-sm-12 col-md-2 col-xs-12">
          <div class="form-group">
              <label>Seccion:</label>
              <select name="pidseccion" class="form-control" id="pidseccion">
                   <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
              </select>
           </div>
        </div>

        <div>
    </div>
</div>


  <button type="submit" class="btn btn-primary">guardar</button>
{!!Form::close()!!}