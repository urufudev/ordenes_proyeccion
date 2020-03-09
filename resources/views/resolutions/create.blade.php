@extends('layouts.app')
@section('styles')
<link href="{{asset('js/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('title')
Crear Resolución | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>CREAR RESOLUCION</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('resolutions.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">

        {!! Form::open(['route'=>'resolutions.store','files'=>true]) !!}
            @include('resolutions.partials.form')
        {!! Form::close() !!}
           


       
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script src="{{asset('js/vendor/select2/js/select2.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
       
        $('.bestupper').caseEnforcer('uppercase');

    });
  //multiple select
	$('.js-example-basic-multiple').select2();

</script>
@endsection