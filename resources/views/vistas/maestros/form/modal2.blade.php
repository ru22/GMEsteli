
<div class="modal fade" tabindex="-1" role="dialog" id="modal2-delete-{{$maes->id}}">
 {!!Form::open(['route'=>['maestros.destroy',$maes->id],'method'=>'delete'])!!}
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header colori">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Elimiar Maestro</h4>
      </div>
      <div class="modal-body">
     <h5>Confirme si decea eliminar al maestros: {{$maes->nombres." ".$maes->apellidos}}</h5>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
      </div>
    </div>
  </div>
{!!Form::close()!!}
</div>
