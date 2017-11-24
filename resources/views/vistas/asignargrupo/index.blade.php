
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
          <div class="wizard-inner">
              @include('vistas.asignargrupo.form.lista')
          </div>
        </div>
      </section>
    </div>
</div>

@stop 