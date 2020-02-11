@extends('layouts.app')
@section('title')
Ver Usuarios | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>VER USUARIO</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('users.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">
                        
            <div class="form-row">
              <div class="col-md-4 mb-3">
                  <label for="name"> <b>NOMBRE</b> </label>
                  <p type="text" class="form-control" id="name">{{$user->name}}</p>
              </div>
              <div class="col-md-4 mb-3">
                  <label for="ap_paterno"><b>APELLIDO PATERNO</b> </label>
                  <p type="text" class="form-control" id="ap_paterno">{{$user->ap_paterno}}</p>
              </div>
              <div class="col-md-4 mb-3">
                <label for="ap_materno"><b>APELLIDO MATERNO</b></label>
                <p type="text" class="form-control" id="ap_materno">{{$user->ap_materno}}</p>
              </div>
          </div>

          <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="dni"><b>DNI</b></label>
                <p type="text" class="form-control" id="dni">{{$user->dni}}</p>
            </div>
            <div class="col-md-3 mb-3">
                <label for="gender"><b>GENERO</b></label>
                <p type="text" class="form-control" id="gender">{{$user->gender}}</p>
            </div>
            <div class="col-md-3 mb-3">
              <label for="f_birth"><b>FECHA DE NACIMIENTO</b></label>
              <p type="text" class="form-control" id="f_birth">{{$user->f_birth}}</p>
            </div>
            <div class="col-md-3 mb-3">
              <label for="phone"><b>CELULAR</b></label>
              <p type="text" class="form-control" id="phone">{{$user->phone}}</p>
            </div>
        </div>

        <div class="form-row">
          <div class="col-md-4 mb-3">
              <label for="office_id"> <b>OFICINA</b> </label>
              <p type="text" class="form-control" id="office_id">{{$user->office->name}}</p>
          </div>
          <div class="col-md-4 mb-3">
              <label for="position"><b>CARGO</b> </label>
              <p type="text" class="form-control" id="position">{{$user->position}}</p>
          </div>
          <div class="col-md-4 mb-3">
            <label for="regime"><b>REGIMEN</b></label>
            <p type="text" class="form-control" id="regime">{{$user->regime}}</p>
          </div>
      </div>


       
      </div>
    </div>
  </div>
@endsection
