
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal2-edit-{{$est->id}}">
 {!!Form::model($estudiantes,['route'=>['ingreso.update',$est->id],'method'=>'PUT'])!!}
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
     <div class="modal-header modaledit col">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title "><span class="glyphicon glyphicon-edit"></span> Editar Estudiantes</h4>
      </div><br>

      @include('vistas.ingreso.form.edit')
      <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
   </div>
    </div>
  </div>
   {!!Form::close()!!}
</div> 

