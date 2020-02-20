@extends('layouts.app')
@section('title')
Editar Roles de Oficina | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>EDITAR ROLES DE OFICINA</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('offices.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">
        @isset($users)
        <form action="{{route('offices.rolupdate',$office->id)}}" method="POST">
                        
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col"><b>NOMBRE</b></th>
                    @foreach ($roles as $role)
                        <th class="text-center">
                         <b>{{$role->name}}</b>   
                    
                            
                        </th>    
                    @endforeach
                </tr>
                </thead>
                <tbody>
                
                    @foreach ($users as $user)
                    <tr>
                        <td>
                          <b>{{$user->ap_paterno}} {{$user->ap_materno}}, {{$user->name}}</b>  
                          <input type="hidden" name="users[]" value="{{$user->id}}">
                        </td>

                        @foreach ($roles as $role)
                        
                        <td class="text-center">
                        <div class="custom-control custom-checkbox checkbox-primary m-2">    
                            <input type="checkbox" value="{{$role->id}}" class="custom-control-input"   id="roles[{{$user->id}}][{{$role->id}}]" name="roles[{{$user->id}}][]" @foreach ($user->roles as $rol_user)
                            {{  $role->id == $rol_user->id ? 'checked' : ''}}@endforeach>
                            <label class="custom-control-label" for="roles[{{$user->id}}][{{$role->id}}]"></label>
                            
                        </div>
                        </td>    
                        @endforeach
                        
                        
                    </tr>
                    
                    @endforeach
                
                </tbody>
            </table>
            <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark  text-white text-blod btn-block"> <h4><b>ACTUALIZAR ROLES</b></h4> </button>
            </div>
            </div>

            
        </div>
            @endisset
        </form>
           


       
      </div>
    </div>
  </div>
@endsection
@section('scripts')

<script type="text/javascript">
    $(document).ready(function() {
       
        $('.bestupper').caseEnforcer('uppercase');

    });
</script>
@endsection