<div class="modal fade" tabindex="-1" role="dialog" id="activar-delite-{{$e->id}}">
 {!!Form::open(['route'=>['retirados.destroy',$e->id],'method'=>'delete'])!!}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header col">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reincorporar Estudiantes</h4>
      </div>
      <div class="modal-body">
     <h5>Seguro que de sea reincorporar a  {{$e->nombrese}} {{$e->apellidose}}</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Activar <span class="glyphicon glyphicon-ok"></span></button>
      </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>
 