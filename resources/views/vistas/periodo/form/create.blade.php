<div class="form-group">
	{!!Form::label('periodo','Periodo')!!}
	<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
	{!!Form::text('periodo', null,['id'=>'periodo','class'=>'form-control','placeholder'=>'Nuevo periodo...'])!!}
</div>