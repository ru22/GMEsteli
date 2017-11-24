
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal2-edit-{{$est->id}}">
 {!!Form::model($estudiantes,['route'=>['estudiantes.update',$est->id],'method'=>'PUT'])!!}
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
     <div class="modal-header modaledit col">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title ">Editar Estudiantes</h4>
      </div>

        @include('vistas.alumnos.form.editar')

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>