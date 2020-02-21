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
        <h4>DATOS PERSONALES</h4>
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

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('t_documento','TIPO')}}</b>
                    {{Form::select('t_documento',$t_documents,null,['class'=>'form-control'])}}
                    
                </div>

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('n_documento','DOCUMENTO')}}</b>
                    {{Form::text('n_documento',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'11'])}}
                    
                </div>
            </div>


            <div class="row">
                @isset($provided)
                <div class="col-md-3 mb-3">
                    <b>{{Form::label('f_nacimiento','FECHA')}}</b>
                    {{Form::date('f_nacimiento',$provided->f_nacimiento ? \Carbon\Carbon::parse($provided->f_nacimiento)->format('Y-m-d') : null ,['class'=>'form-control  bestupper','autocomplete'=>'off'])}}
                  </div>
                @else
                 <div class="col-md-3 mb-3">
                    <b>{{Form::label('f_nacimiento','FECHA DE NACIMIENTO')}}</b>
                    {{Form::date('f_nacimiento',null,['class'=>'form-control  bestupper','autocomplete'=>'off'])}}
                  </div>
                @endisset
                

                  <div class="col-md-2 mb-3">
                    <b>{{Form::label('c_multired','CUENTA MULTIRED')}}</b>
                    {{Form::text('c_multired',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'10'])}}
                    
                </div>

                <div class="col-md-3 mb-3">
                    <b>{{Form::label('remige_id','REGIMEN DE PENSIONES')}}</b>
                    {{Form::select('remige_id',$regimes,null,['class'=>'form-control'])}}
                    
                </div>

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('afp_id','AFP')}}</b>
                    {{Form::select('afp_id',$afps,null,['class'=>'form-control'])}}
                    
                </div>

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('cussp','CUSSP')}}</b>
                    {{Form::text('cussp',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'12'])}}
                    
                </div>

            </div>

            <div class="row">
                
                <div class="col-md-12 mb-3">
                    <b>{{Form::label('estudios','ESTUDIOS')}}</b>
                    {{Form::textarea('estudios',null,['class'=>'form-control  ckeditor'])}}
                    
                </div>
                                
            </div>

            

          </div>
    </div>
</div>


<div class="form-row">
    <div class="col-md-12 mb-3">
        <h4>DATOS DEL CONTRATO</h4>
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            
            <div class="row">
                <div class="col-md-2 mb-3">
                    <b>{{Form::label('order_id','ORDEN DE PROYECCION')}}</b>
                    {{Form::select('order_id',$orders,null,['class'=>'form-control'])}}
                    
                </div>

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
