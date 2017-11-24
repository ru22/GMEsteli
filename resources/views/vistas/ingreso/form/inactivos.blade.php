<table  id="table_est" class="display">
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

        </td>
      </tr>

                        
  @endforeach
</table>
@section('tablas')
        {!!Html::script('tablas/jquery.dataTables.min.js')!!}

        {!!Html::script('tablas/main.js')!!}
@endsection