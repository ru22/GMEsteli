<div class="container-fluid">
    <div class="row container-fluid">
        <div class="col-lg-3 col-sm-12 col-md-12 col-xs-12">
        </div>
        <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                    <label>Grados</label>   
                 <select name="pidanio"  class="form-control select pidanio">
                    @foreach($grados as $grados)
                        <option value="{{$grados->id}}">{{$grados->grado}}</option>
                    @endforeach 
                </select>
            </div> 
        </div>

        <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label>Seccion</label>
                 <input type="text" name="seccion" id="pidseccion" class="form-control" >
            </div>
        </div><br>

        <div class="col-lg-1 ">
            <div class="form-group">
                <button type="button" id="seccion" class="btn btn-primary">+</button>    
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <table id="detalle" class="table tble-striped table-bordered tabla-condensed table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Sección</th>
                            </thead>
                            <tfoot>
                                
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@section('scripts')
        
        {!!Html::script('bootstrap/js/seccion.js')!!}
    
@endsection