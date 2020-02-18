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
        <b>{{Form::label('codigo','CÓDIGO')}}</b>
        {{Form::text('codigo',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
    </div>
    <div class="col-md-3 mb-3">
        <b>{{Form::label('modular','CODIGO MODULAR')}}</b>
        {{Form::text('modular',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-6 mb-3">
        <b>{{Form::label('nombre','NOMBRE')}}</b>
        {{Form::text('nombre',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    
</div>

<div class="form-row">
    <div class="col-md-6 mb-3">
        <b>{{Form::label('nivel','NIVEL')}}</b>
        {{Form::text('nivel',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    <div class="col-md-6 mb-3">
        <b>{{Form::label('ugel','UGEL')}}</b>
        {{Form::text('ugel',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    
</div>

<div class="form-row">
    <div class="col-md-4 mb-5">
        <b>{{Form::label('provincia','PROVINCIA')}}</b>
        {{Form::text('provincia',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
    </div>
    <div class="col-md-4 mb-5">
        <b>{{Form::label('distrito','DISTRITO')}}</b>
        {{Form::text('distrito',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-4 mb-5">
        <b>{{Form::label('lugar','LUGAR')}}</b>
        {{Form::text('lugar',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
    
</div>



<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
