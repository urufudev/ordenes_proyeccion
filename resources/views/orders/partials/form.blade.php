{{Form::hidden('user_id',auth()->user()->id)}}


@if ($errors->any())
    <div class="alert alert-danger solid bdr-0 text-white" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li><b>{{$error}}</b> </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            
            <div class="row">
                
                <div class="col-md-4 mb-3">
                    <b>{{Form::label('n_expediente','SISGEDO')}}</b>
                    {{Form::text('n_expediente',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('folio','FOLIO')}}</b>
                    {{Form::number('folio',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
    
                <div class="col-md-2 mb-3">
                    <b>{{Form::label('fecha','FECHA')}}</b>
                    {{Form::text('fecha',null,['class'=>'form-control datepicker bestupper','autocomplete'=>'off'])}}
                  </div>
    
                  <div class="col-md-2 mb-3">
                    <b>{{Form::label('gestion_id','GESTION')}}</b>
                    {{Form::select('gestion_id',$gestions,null,['class'=>'form-control'])}}
                    
                </div>

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('year_id','AÑO')}}</b>
                    {{Form::select('year_id',$years,null,['class'=>'form-control'])}}
                    
                </div>
                
            </div>

          </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            
            <div class="row">
                
                <div class="col-md-2 mb-3">
                    <b>{{Form::label('nombre','NOMBRE')}}</b>
                    {{Form::text('nombre',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('ap_paterno','APELLIDO PATERNO')}}</b>
                    {{Form::text('ap_paterno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('ap_materno','APELLIDO MATERNO')}}</b>
                    {{Form::text('ap_materno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>

                <div class="col-md-4 mb-3">
                    <b>{{Form::label('position_id','CARGO')}}</b>
                    {{Form::select('position_id',$positions,null,['class'=>'form-control'])}}
                    
                </div>
                
            </div>

          </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            
            <div class="row">
                
                
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('o_plaza','PLAZA DE ORIGEN')}}</b>
                    {{Form::text('o_plaza',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('d_plaza','PLAZA DE DESTINO')}}</b>
                    {{Form::text('d_plaza',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>

                <div class="col-md-6 mb-3">
                    <b>{{Form::label('institution_id','INSITUCION')}}</b>
                    {{Form::select('institution_id',$institutions,null,['class'=>'form-control'])}}
                    
                </div>
                
            </div>
            <div class="row">
                
                
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('lugar','LUGAR')}}</b>
                    {{Form::text('lugar',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('distrito','DISTRITO')}}</b>
                    {{Form::text('distrito',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('provincia','PROVINCIA')}}</b>
                    {{Form::text('provincia',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>

                <div class="col-md-3 mb-3">
                    <b>{{Form::label('level_id','NIVEL')}}</b>
                    {{Form::select('level_id',$levels,null,['class'=>'form-control'])}}
                    
                </div>
                
            </div>

          </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            
            <div class="row">
                
                <div class="col-md-12 mb-3">
                    <b>{{Form::label('accion','ACCION A EJECUTAR')}}</b>
                    {{Form::textarea('accion',null,['class'=>'form-control  bestupper ckeditor'])}}
                    
                </div>
                                
            </div>

            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <b>{{Form::label('referencia','REFERENCIA')}}</b>
                    {{Form::text('referencia',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>

                <div class="col-md-4 mb-3">
                    <b>{{Form::label('i_vigencia','FECHA INICIO VIGENCIA')}}</b>
                    {{Form::text('i_vigencia',null,['class'=>'form-control datepicker bestupper','autocomplete'=>'off'])}}
                  </div>

                  <div class="col-md-4 mb-3">
                    <b>{{Form::label('f_vigencia','FECHA FIN VIGENCIA')}}</b>
                    {{Form::text('f_vigencia',null,['class'=>'form-control datepicker bestupper','autocomplete'=>'off'])}}
                  </div>
                                
            </div>

          </div>
    </div>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
