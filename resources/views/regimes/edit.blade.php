@extends('layouts.app')
@section('title')
Editar Regimen Laboral | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>EDITAR REGIMEN LABORAL</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('regimes.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">

        {!! Form::model($regime,['route'=>['regimes.update', $regime->id],'method'=>'PUT']) !!}
            
            @include('regimes.partials.form')

        {!! Form::close() !!}  
           


       
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