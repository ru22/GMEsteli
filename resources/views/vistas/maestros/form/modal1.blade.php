
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal1-edit-{{$maes->id}}">
 {!!Form::model($maestros,['route'=>['maestros.update',$maes->id],'method'=>'PUT'])!!}
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header col">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{$maes->nombres." ".$maes->apellidos}}</h4>
      </div>
          <div class="container-fluid"><br>
            @include('vistas.maestros.form.editar')
         </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
   </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>  