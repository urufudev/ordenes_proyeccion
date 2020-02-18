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
    <div class="col-md-3 mb-3">
        {{Form::label('cod_gestion','CÓDIGO DE GESTIÓN')}}
        {{Form::text('cod_gestion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
    </div>
    <div class="col-md-3 mb-3">
        {{Form::label('n_resolucion','NÚMERO DE RESOLUCIÓN')}}
        {{Form::text('n_resolucion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-2 mb-3">
        {{Form::label('s_direccion','SIGLAS DE DIRECCIÓN')}}
        {{Form::text('s_direccion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('r_direccion','RESPONSABLE DE DIRECCIÓN')}}
        {{Form::text('r_direccion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
</div>

<div class="form-row">
    <div class="col-md-2 mb-3">
        {{Form::label('s_administracion','SIGLAS DE ADMINISTRACIÓN')}}
        {{Form::text('s_administracion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('r_administracion','RESPONSABLE DE ADMINISTRACIÓN')}}
        {{Form::text('r_administracion',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-2 mb-3">
        {{Form::label('s_dgi','SIGLAS DE DGI')}}
        {{Form::text('s_dgi',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('r_dgi','RESPONSABLE DE DGI')}}
        {{Form::text('r_dgi',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
</div>

<div class="form-row">
    <div class="col-md-2 mb-3">
        {{Form::label('s_dgp','SIGLAS DE DGP')}}
        {{Form::text('s_dgp',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('r_dgp','RESPONSABLE DE DGP')}}
        {{Form::text('r_dgp',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-2 mb-3">
        {{Form::label('s_personal','SIGLAS DE PERSONAL')}}
        {{Form::text('s_personal',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('r_personal','RESPONSABLE DE PERSONAL')}}
        {{Form::text('r_personal',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
</div>

<div class="form-row">
    
    <div class="col-md-2 mb-3">
        {{Form::label('s_finanzas','SIGLAS DE FINANZAS')}}
        {{Form::text('s_finanzas',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('r_finanzas','RESPONSABLE DE FINANZAS')}}
        {{Form::text('r_finanzas',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
