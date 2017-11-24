
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Mimodal">
{!!Form::model($user,['route'=>['asignacion.store'],'method'=>'PUT'])!!}
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
     <div class="modal-header modaledit col">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title ">Nuevo Grupo</h4>
      </div><br>
     @include('vistas.asignargrupo.form.create')
      <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Asignar <span class="glyphicon glyphicon-floppy-disk"></span></button>
   </div>
    </div>
  </div>
   {!!Form::close()!!}
</div> 
