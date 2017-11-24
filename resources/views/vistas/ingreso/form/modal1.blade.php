
<div class="modal fade" tabindex="-1" role="dialog" id="modal1-delite-{{$est->id}}">
 {!!Form::open(['route'=>['ingreso.destroy',$est->id],'method'=>'delete'])!!}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header colori">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Elimiar Estudiantes</h4>
      </div>
      <div class="modal-body">
       @include('vistas.ingreso.form.eliminar')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
      </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>
 