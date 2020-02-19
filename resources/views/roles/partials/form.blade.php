<div class="form-group">
    <b>{{Form::label('name','NOMBRE')}}</b>
    {{Form::text('name',null,['class'=>'form-control bestupper'])}}
</div>
<div class="form-group">
    <b>{{Form::label('slug','SLUG')}}</b>
    {{Form::text('slug',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
    <b>{{Form::label('description','DESCRIPCIÓN')}}</b>
    {{Form::textarea('description',null,['class'=>'form-control  bestupper'])}}
</div>
<hr>

<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
            <h4>PERMISOS ESPECIALES</h4>
            <code>SELECCIONE EN CASO DE SER NECESARIO</code>
            <div class="custom-control custom-radio radio-info custom-control m-2">
                {{Form::radio('speccial','all-access',null,['id'=>'all-access','class'=>'custom-control-input'])}}    
                {{Form::label('all-access','ACCESO TOTAL',['class'=>'custom-control-label'])}}
          
            </div>
              <div class="custom-control custom-radio radio-info custom-control m-2">
                {{Form::radio('speccial','no-access',null,['id'=>'access','class'=>'custom-control-input'])}}    
                {{Form::label('access','NINGUN ACCESO',['class'=>'custom-control-label'])}}    
            </div>
        </div>

    </div>

    
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
             <h4>PERMISOS</h4>
             @foreach ($permissions as $permission)
             <div class="custom-control custom-checkbox checkbox-primary m-2">
                
                {!! Form::checkbox('permissions[]', $permission->id,null,['id'=>$permission->id,'class'=>'custom-control-input']) !!}
                
                <label class="custom-control-label" for="{{$permission->id}}">{{$permission->name}}
                    <em>({{$permission->description ?: 'Sin Descripcion'}})</em>
                </label>
              </div>
             @endforeach
              
            
          </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>GRABAR</b></h4> </button>
</div>
