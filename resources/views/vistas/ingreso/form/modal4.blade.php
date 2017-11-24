
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Mimodal">
  {!!Form::open(['route'=>'ingreso.store','method'=>'POST'])!!}
  {{Form::Token()}}
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header col">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-plus"></span> Nueva Ingreso</h4>
        </div> 
          @include('vistas.ingreso.form.ingreso') 
      </div>
    </div>
  {!!Form::close()!!} 
</div>
@section('scripts')
  {!!Html::script('bootstrap/js/maskedinput.js')!!} 
  {!!Html::script('bootstrap/js/main.js')!!} 
@endsection