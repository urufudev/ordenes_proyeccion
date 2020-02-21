{{Form::hidden('user_id',auth()->user()->id)}}


<div class="form-row">
    <div class="col-md-4 mb-3">
        <b>{{Form::label('name','NOMBRE')}}</b>
        {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
    </div>
    <div class="col-md-4 mb-3">
        <b>{{Form::label('ap_paterno','APELLIDO PATERNO')}}</b>
        {{Form::text('ap_paterno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-4 mb-3">
        <b>{{Form::label('ap_materno','APELLIDO MATERNO')}}</b>
        {{Form::text('ap_materno',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
      
    </div>
</div>

<div class="form-row">
  <div class="col-md-3 mb-3">
    <b>{{Form::label('dni','DNI')}}</b>
    {{Form::text('dni',null,['class'=>'form-control bestupper','autocomplete'=>'off','maxlength'=>'8'])}}
      
  </div>

    

  <div class="col-md-3 mb-3">
    <b>{{Form::label('gender','GENERO')}} </b>
    
    <div class="form-row">
        
        <div class="custom-control custom-radio radio-info custom-control m-2">
            {{Form::radio('gender','MASCULINO',null,['id'=>'MASCULINO','class'=>'custom-control-input'])}}    
            {{Form::label('MASCULINO','MASCULINO',['class'=>'custom-control-label'])}}
      
        </div>
          <div class="custom-control custom-radio radio-info custom-control m-2">
            {{Form::radio('gender','FEMENINO',null,['id'=>'FEMENINO','class'=>'custom-control-input'])}}    
            {{Form::label('FEMENINO','FEMENINO',['class'=>'custom-control-label'])}}    
        </div>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <b>{{Form::label('f_birth','FECHA DE NACIMIENTO')}}</b>
    {{Form::text('f_birth',null,['class'=>'form-control datepicker bestupper','autocomplete'=>'off'])}}
  </div>
  <div class="col-md-3 mb-3">
    <b>{{Form::label('phone','CELULAR')}}</b>
    {{Form::text('phone',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
  </div>
</div>

<div class="form-row">

    <div class="col-md-5 mb-3">
        <b>{{Form::label('office_id','OFICINA')}}</b>
        {{Form::select('office_id',$offices,null,['class'=>'form-control'])}}
        
    </div>
    <div class="col-md-4 mb-3">
        <b>{{Form::label('position','CARGO')}}</b>
        {{Form::text('position',null,['class'=>'form-control bestupper'])}}
    </div>
    <div class="col-md-3 mb-3">
        <b>{{Form::label('laboral_id','REGIMEN LABORAL')}}</b>
        {{Form::select('laboral_id',$laborals,null,['class'=>'form-control'])}}
    
    </div>
</div>

<div class="form-row">
    <div class="col-md-3 mb-3">
        <b>{{Form::label('email','EMAIL')}}</b>
        {{Form::text('email',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
        
    </div>
    <div class="col-md-3 mb-3">
        <b>{{Form::label('password','CONTRASEÑA')}}</b>
        <input name="password" type="password" class="form-control bestupper"  >

        
    </div>
    
    
</div>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            <b><p>ROLES</p></b>
             @foreach ($roles as $role)
             <div class="custom-control custom-checkbox checkbox-primary m-2">
                
                {!! Form::checkbox('roles[]', $role->id,null,['id'=>$role->id,'class'=>'custom-control-input']) !!}
                
                <label class="custom-control-label" for="{{$role->id}}">{{$role->name}}
                    <em>({{$role->description ?: 'Sin Descripcion'}})</em>
                </label>
              </div>
             @endforeach
              
            
          </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
