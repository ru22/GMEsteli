<div class="box box-primary container-fluid"> 
  <div class="row container-fluid"><br>
     <div class="col-md-3"> 
        <div class="form-group">
          <input type="text" name="codigo" id="text_buscar" class="form-control" placeholder="Buscar..." >
        </div>
      </div>
    <table id="tabla" class="table">
      <thead > 
          <th>codigo</th>
          <th>Nombres </th>
          <th>Apellidos</th>
          <th>Procedencia</th>
          <th>F-Nacimiento</th> 
          <th>Sexo</th>
                            
                  
          <th>Opciones</th>
      </thead>
      @foreach ($estudiantes as $e)
          <tr> 
            <th>{{$e->codigo}}</th> 
            <td>{{$e->nombrese}}</td>
            <td>{{$e->apellidose}}</td>
            <td>{{$e->procedencia}}</td>
            <td>{{$e->fnac}}</td> 
            <td>{{$e->sexo}}</td>
            <td>
              <a href="" data-target="#activar-delite-{{$e->id}}" data-toggle="modal"><button class="btn btn-info" >Activar <span class="glyphicon glyphicon-ok"></span></button>
            </td>
          </tr> 

           @include('vistas.inactivos.form.activar')            
      @endforeach 
    </table>
  </div>
</div>
