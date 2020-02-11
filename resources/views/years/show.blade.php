@extends('layouts.app')
@section('title')
Ver Año | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>VER AÑO</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('years.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">
            
            <div class="form-group">
                <label for="name">AÑO</label>
                <p type="text" class="form-control" id="name" >{{$year->name}}</p>
            </div>
            <div class="form-group">
                <label for="description">DESCRIPCIÓN</label>
            <textarea class="form-control" id="description" readonly>{{$year->description}}</textarea>
            </div>
            
           


       
      </div>
    </div>
  </div>
@endsection
