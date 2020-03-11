@extends('layouts.app')
@section('title')
Editar Interesado | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>EDITAR INTERESADO</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('interesteds.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">

        {!! Form::model($interested,['route'=>['interesteds.update', $interested->id],'method'=>'PUT']) !!}
            
            @include('interesteds.partials.form')

        {!! Form::close() !!}  
           


       
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script src="{{asset('js/vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
       
        $('.bestupper').caseEnforcer('uppercase');

        $("#name, #slug").stringToSlug({
          callback:function(text){
            $("#slug_name").val(text);
          }
        });

        $("#ap_paterno, #slug").stringToSlug({
          callback:function(text){
            $("#slug_appaterno").val(text);
          }
        });

        $("#ap_materno, #slug").stringToSlug({
          callback:function(text){
            $("#slug_apmaterno").val(text);
          }
        });

    });
</script>
@endsection