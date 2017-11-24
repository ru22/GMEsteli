@extends('layouts.admin')
@section('content')
<div class="">
    <div class="row container-fluid">
      <section>
        <div class="wizard container-fluid">
          <div class="wizard-inner"><br>
               @include('vistas.alumnos.form.lista')  
          </div>
        </div>
      </section>
    </div>
</div>
@stop