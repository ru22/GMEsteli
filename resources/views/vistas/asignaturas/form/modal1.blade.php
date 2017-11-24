
<div class="modal fade" tabindex="-1" role="dialog" id="Mimodal">
 {!!Form::open(['route'=>'asignaturas.store','method'=>'POST'])!!}
  {{Form::Token()}}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header col">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title "><span class="glyphicon glyphicon-plus"></span> Nueva Asignatura</h4>
      </div>
      <div class="modal-body">
     @include('vistas.asignaturas.form.create')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" id="guardar" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
      </div>
    </div>
  </div>
  {!!Form::close()!!} 
</div>
