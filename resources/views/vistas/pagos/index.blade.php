@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
          <div class="wizard-inner"><br>
               @include('vistas.pagos.form.listaestudiantes')  
          </div>
        </div>
      </section>
    </div>
</div>
@stop
 