  {!!Form::open(['route'=>'matricula.store','method'=>'POST'])!!}
  {{Form::Token()}}

 <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <div class="form-group">
             <label>Estudiante:</label>
              <select name="idestudiantes" class="form-control selectpicker" data-live-search="true">
             @foreach($matriculas as $est)
                  <option value="{{$est->id}}_{{$est->nombrese}}_{{$est->apellidose}}">{{$est->nombrese}}-{{$est->apellidose}}</option>
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
                      <option value="1">No</option>
                      <option value="2">Si</option>
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
            <option value="1">Matutino</option>
            <option value="2">Vespertino</option>
            <option value="3">Nocturno</option>
            <option value="4">Savatino</option>
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
              <option value="1">1º-Nivel-Prescolar</option>
              <option value="2">2º-Nivel-Prescolar</option>
              <option value="3">3º-Nivel-Prescolar</option>
              <option value="4">1º-Grado</option>
              <option value="5">2º-Grado</option>
              <option value="6">3º-Grado</option>
              <option value="7">4º-Grado</option>
              <option value="8">5º-Grado</option>
              <option value="9">6º-Grado</option>
              <option value="10">1º-Anio</option>
              <option value="11">2º-Anio</option>
              <option value="12">3º-Anio</option>
              <option value="13">4º-Anio</option>
              <option value="14">5º-Anio</option>
              </select>
           </div>
        </div>

          <div class="col-lg-2 col-sm-12 col-md-2 col-xs-12">
          <div class="form-group">
              <label>Seccion:</label>
              <select name="pidseccion" class="form-control" id="pidseccion">
                   <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="2">C</option>
                    <option value="2">D</option>
              </select>
           </div>
        </div>

        <div>
    </div>
</div>


  <button type="submit" class="btn btn-primary">guardar</button>
{!!Form::close()!!}