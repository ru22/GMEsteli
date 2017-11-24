
<div class="modal fade" tabindex="-1" role="dialog" id="modal1-delite-{{$est->id}}">
 {!!Form::open(['route'=>['ingreso.destroy',$est->id],'method'=>'delete'])!!}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header colori">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Elimiar Estudiantes</h4>
      </div>
      <div class="modal-body">
          <h5>seguro que decea eliminar {{$est->nombrese}} {{$est->apellidose}}</h5>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class=""></span></button>
     <button type="submit" class="btn btn-danger">Guardar <span class="glyphicon glyphicon-trash"></span></button>
   </div>
      </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>
 