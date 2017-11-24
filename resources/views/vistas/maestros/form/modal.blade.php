<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Mimodal">
{!!Form::open(['route'=>'maestros.store','method'=>'POST'])!!}
    {{Form::Token()}}
  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
     <div class="modal-header col">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title "><span class="glyphicon glyphicon-plus"></span> Nuevo Maestro</h4>
      </div>
      <div class="container-fluid"><br>
       @include('vistas.maestros.form.create')
      </div>
				
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-floppy-remove"></span></button>
     <button type="submit" class="btn btn-primary">Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
   </div>
    </div>
  </div>
   {!!Form::close()!!}
</div>