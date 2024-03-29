@extends('layouts.app')
@section('title')
Crear Proveido Presupuestal | Sistema de Administración de Personal
@endsection
@section('styles')
<link rel="stylesheet" href="{{asset('js/vendor/datepicker/bootstrap-datepicker3.min.css')}}">
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>CREAR PROVEIDO PRESUPUESTAL</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('provideds.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">

        {!! Form::open(['route'=>'provideds.store']) !!}
            @include('provideds.partials.form')
        {!! Form::close() !!}
           


       
      </div>
    </div>
  </div>
@endsection
@section('scripts')

<script src="{{asset('js/vendor/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/vendor/datepicker/bootstrap-datepicker.es.min.js')}}"></script>

<script src="{{asset('js/vendor/ckeditor/ckeditor.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
       
        $('.bestupper').caseEnforcer('uppercase');
        $('.input-daterange').datepicker({});

        $('.datepicker').datepicker({
          language: "es",
          startdate: "11/05/2011", enddate: "11/05/2100",
          orientation: "bottom auto",
          autoclose: true,
          format: "yyyy-mm-dd",

          });

    });

    CKEDITOR.config.height= 100;
    CKEDITOR.config.widht= 400;
    CKEDITOR.config.skin = 'office2013';

    CKEDITOR.replace('.ckeditor');

</script>
@endsection