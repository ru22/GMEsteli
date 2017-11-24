

<div class="modal fade" tabindex="-1" role="dialog" id="modal3-store-{{$est->id}}">
  {!!Form::model($estudiantes,['route'=>['matricula.store',$est->id],'method'=>'POST'])!!}
  {{Form::Token()}}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header col">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-plus"></span> {{$est->nombrese." ".$est->apellidose}}</h4>
      </div>
      <div class="modal-body">
    @include('vistas.ingreso.form.matricula') 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
      </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>
@section('scripts')
        {!!Html::script('tablas/main2.js')!!}
@endsection 