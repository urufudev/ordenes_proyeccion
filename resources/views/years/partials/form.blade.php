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
    {{Form::label('name','AÑO')}}
    {{Form::number('name',null,['class'=>'form-control bestupper'])}}
</div>
<div class="form-group">
    {{Form::label('description','DESCRIPCIÓN')}}
    {{Form::textarea('description',null,['class'=>'form-control  bestupper'])}}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
