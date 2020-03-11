@if ($errors->any())
    <div class="alert alert-danger solid bdr-0 text-white" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li><b>{{$error}}</b> </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <b>{{Form::label('dni','DNI')}}</b>
    {{Form::text('dni',null,['class'=>'form-control bestupper','maxlength'=>'8','autocomplete'=>'off'])}}
</div>

<div class="form-group">
    <b>{{Form::label('name','NOMBRE')}}</b>
    {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
</div>
<div class="form-group">
    <b>{{Form::label('ap_paterno','APELLIDO PATERNO')}}</b>
    {{Form::text('ap_paterno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
</div>
<div class="form-group">
    <b>{{Form::label('ap_materno','APELLIDO MATERNO')}}</b>
    {{Form::text('ap_materno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
</div>




<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
