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
                    <b>{{Form::label('n_resolucion','NÚMERO DE RESOLUCION')}}</b>
                    {{Form::text('n_resolucion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>

                @isset($resolution)
                <div class="col-md-4 mb-3">
                    <b>{{Form::label('fecha','FECHA')}}</b>
                    {{Form::date('fecha',$resolution->fecha ? \Carbon\Carbon::parse($resolution->fecha)->format('Y-m-d') : null ,['class'=>'form-control  bestupper','autocomplete'=>'off'])}}
                  </div>
                @else
                  <div class="col-md-4 mb-3">
                    <b>{{Form::label('fecha','FECHA')}}</b>
                    {{Form::date('fecha', null ,['class'=>'form-control  bestupper','autocomplete'=>'off'])}}
                  </div>
                @endisset

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('order_id','ORDEN DE PROYECCIÓN')}}</b>
                    {{Form::select('order_id',$orders,null,['class'=>'form-control'])}}
                    
                </div>

                <div class="col-md-2 mb-3">
                    <b>{{Form::label('n_persona','NÚMERO DE PERSONAS')}}</b>
                    {{Form::text('n_persona',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                    
                </div>
               
                
            </div>
            
            <div class="row">
                <div class="col-md-12 mb-3 text-black">
                    <b>{{Form::label('accion','ACCION A EJECUTAR')}}</b>
                    {{Form::textarea('accion',null,['class'=>'form-control  bestupper','rows'=>'4'])}}
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-3">
                    <b>{{Form::label('tags','PERSONAS')}}</b>
                    {{Form::text('tags',null,['class'=>'form-control bestupper','autocomplete'=>'off','data-role'=>'tagsinput'])}}
                    
                </div>

                <div class="col-md-4 mb-3">
                    <b>{{Form::label('notificado','NOTIFICADO')}}</b>
                    <div class="pdn-15 pdn-sm-20 bdr d-flex custom-control-inline">
                        
                        
                        
                        <div class="custom-control custom-radio radio-info custom-control m-2">
                            {{Form::radio('notificado','NOTIFICADO',null,['id'=>'NOTIFICADO','class'=>'custom-control-input'])}}    
                            {{Form::label('NOTIFICADO','NOTIFICADO',['class'=>'custom-control-label'])}}
                      
                        </div>
                          <div class="custom-control custom-radio radio-info custom-control m-2">
                            {{Form::radio('notificado','NO NOTIFICADO',null,['id'=>'NO NOTIFICADO','class'=>'custom-control-input'])}}    
                            {{Form::label('NO NOTIFICADO','NO NOTIFICADO',['class'=>'custom-control-label'])}}    
                        </div>
                    </div>
            
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <b>{{Form::label('file','ARCHIVO')}}</b>
                    
                    <div class="custom-file">
                        {{Form::file('file', null   ,['class'=>'custom-file-input','accept'=>'.pdf'])}}
                        {{-- <input type="file" accept=".pdf" class="custom-file-input" id="file" >
                        <label class="custom-file-label" for="file">Seleccionar</label> --}}

                        

                      </div>

                    
                </div>
            </div>

          </div>
    </div>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
