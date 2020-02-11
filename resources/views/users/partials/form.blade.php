{{Form::hidden('user_id',auth()->user()->id)}}


<div class="form-row">
    <div class="col-md-4 mb-3">
        {{Form::label('name','NOMBRE')}}
        {{Form::text('name',null,['class'=>'form-control bestupper'])}}
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('ap_paterno','APELLIDO PATERNO')}}
        {{Form::text('ap_paterno',null,['class'=>'form-control bestupper'])}}
        
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('ap_materno','APELLIDO MATERNO')}}
        {{Form::text('ap_materno',null,['class'=>'form-control bestupper'])}}
      
    </div>
</div>

<div class="form-row">
  <div class="col-md-3 mb-3">
    {{Form::label('dni','DNI')}}
    {{Form::text('dni',null,['class'=>'form-control bestupper'])}}
      
  </div>

    

  <div class="col-md-3 mb-3">
    {{Form::label('gender','GENERO')}} 
    <div class="custom-control custom-radio radio-primary custom-control">
        
        <label>
        {{Form::radio('gender','MASCULINO',null,['id'=>'MASCULINO','class'=>'custom-control-input'])}} <label for="MASCULINO">MASCULINO    
            </label>
        </label>
        
        <label>
        {{Form::radio('gender','FEMENINO',null,['id'=>'FEMENINO','class'=>'custom-control-input'])}} <label for="FEMENINO">FEMENINO    
            </label>
        </label>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    {{Form::label('f_birth','FECHA DE NACIMIENTO')}}
    {{Form::text('f_birth',null,['class'=>'form-control datepicker bestupper'])}}
  </div>
  <div class="col-md-3 mb-3">
    {{Form::label('phone','CELULAR')}}
    {{Form::text('phone',null,['class'=>'form-control bestupper'])}}
  </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        {{Form::label('office_id','OFICINA')}}
        {{Form::select('office_id',$offices,null,['class'=>'form-control'])}}
        
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('position','CARGO')}}
        {{Form::text('position',null,['class'=>'form-control bestupper'])}}
    </div>
    <div class="col-md-4 mb-3">
        {{Form::label('regime','REGIMEN')}}
        {{Form::text('regime',null,['class'=>'form-control bestupper'])}}
    
    </div>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
