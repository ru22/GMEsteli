<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Mimodal">
  {!!Form::open(['route'=>'nuevo.store','method'=>'POST'])!!}
  {{Form::Token()}}
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
     <div class="modal-header modaledit colori">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title ">Nuevo Producto</h4>
      </div>
     @include('vistas.productos.form.create')
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="submit" class="btn btn-primary">Aceptar</button>
   </div>
    </div>
  </div>
   {!!Form::close()!!}
</div> 
