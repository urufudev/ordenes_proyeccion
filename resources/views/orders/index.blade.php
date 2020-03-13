@extends('layouts.app')
@section('title')
Lista de Ordenes de Proyección | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-8 pdn-sm-y-10">
                
                @foreach (auth()->user()->roles as $rol) 
                      @if ($rol->name == 'ADMINISTRADOR')
                        
                      <h4>LISTA TOTAL DE ORDENES DE PROYECCIÓN</h4>
                        
                      @else
                       
                      <h4>LISTA DE ORDENES DE PROYECCIÓN DE LA OFICINA DE {{Auth::user()->office->name}}</h4> 
                        
                    
                      @endif
                    @endforeach
            </div>
            @can('orders.create')
            <div class="col-md-4">
                <a href="{{route('orders.create')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>CREAR</b> 
            </a>        
            </div>   
            @endcan
        </div>
        
      </div>
      <div class="card-body table-responsive">
        <table data-order='[[ 0, "desc" ]]' id="dgwTabla" class="table js-exportable">
            <thead >
                <tr>
                    <th width="3%">ID</th>
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>CARGO</th>
                    @foreach (auth()->user()->roles as $rol) 
                      @if ($rol->name == 'ADMINISTRADOR')
                          <th>OFICINA</th>
                          <th>USUARIO</th>
                      @else
                          <th>INSTITUCIÓN</th>
                      @endif
                    @endforeach
                    
                    <th>FECHA</th>
                    
                    
                    
                    <th width="5%" class="text-center">OPCIONES</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach($orders as $order)
                <tr>
                    <td><b>{{$order->id}}</b></td>
                  
                   <td>{{$order->c_interno}}</td>
                    <td>{{$order->full_name}}</td>
                    <td>{{$order->position->name}}</td>
                    @foreach (auth()->user()->roles as $rol) 
                      @if ($rol->name == 'ADMINISTRADOR')
                        
                          <td>{{$order->user->office->name}}</td>
                          <td>{{$order->user->full_name}}</td>
                      @else
                        
                          <td>{{$order->institution->nombre}}</td>
                        
                    
                      @endif
                    @endforeach

                    
                    <td>{{ date('d/m/Y', strtotime($order->fecha)) }}</td>
                    
          
                    
                    
                    <td class="text-center">
                      
                        <div class="btn-group pull-right" role="group" aria-label="Basic example">
                          @can('orders.show')
                              <a href="" data-target="#modal-show-{{$order->id}}" class="btn btn-outline-primary  btn-rounded btn-floating mgn-r-10" data-toggle="modal" id="modal-show" class="btn btn-sm btn-danger"  data-placement="top" title="VER">
                                <i class="fas fa-search"></i>
                              </a>
                              @endcan
                              @can('orders.edit')
                              <a  href="{{route('orders.edit',$order->id)}}" class="btn btn-outline-success  btn-rounded btn-floating mgn-r-10" data-toggle="tooltip" data-placement="top" title="EDITAR">
                                <i class="far fa-edit"></i>
                              </a>
                              @endcan
                              @can('orders.destroy')
                              <a href="" data-target="#modal-delete-{{$order->id}}" class="btn btn-outline-danger btn-rounded btn-floating mgn-r-10" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="SUSPENDER">
                                <i class="far fa-trash-alt"></i>
                              </a>
                              
                              @endcan
                              @can('orders.pdf')
                                
                                    
                                    <a href="{{route('orders.pdf',$order->id)}}" class="btn btn-outline-info btn-rounded btn-floating" target="_blank"  data-toggle="tooltip" data-placement="top" title="IMPRIMIR">
                                    <i class="fas fa-print" ></i>
                                    </a>
                               
                              @endcan

                            
                        </div>
                        
                    </td>
                    @include('orders.modal')
                    @include('orders.show')
                </tr>
                
                @endforeach
            </tbody> --}}
        </table>
      </div>
    </div>
  </div>




  

  @section('scripts')
  <script src="{{asset('js/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('js/vendor/datatables/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('js/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('js/vendor/datatables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('js/vendor/datatables/buttons.bootstrap4.min.js')}}"></script>
{{--   <script src="{{asset('js/vendor/datatables/jszip.min.js')}}"></script>
  <script src="{{asset('js/vendor/datatables/pdfmake.min.js')}}"></script>
  <script src="{{asset('js/vendor/datatables/vfs_fonts.js')}}"></script> --}}
 {{--  <script src="{{asset('js/vendor/datatables/buttons.html5.min.js')}}"></script> --}}
  <script src="{{asset('js/vendor/datatables/buttons.colVis.min.js')}}"></script>
{{--   <script src="{{asset('js/vendor/datatables/buttons.print.min.js')}}"></script> --}}

@foreach (auth()->user()->roles as $rol) 
  @if ($rol->name == 'ADMINISTRADOR')
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $('#modal-delete').tooltip();

        var table= $('#dgwTabla').DataTable({
         "serverSide":false,
       "ajax":"{{url('api/orders')}}",
       "columns": [
           {data: 'id'},
           {data: 'c_interno'},
           {data:'full_name'},
           {data:'position.name'},
           
           {data:'user.office.name'},
           {data:'user.full_name'},
           {data:'fecha.date'},
           {data:'btn'}

             ],
        language: {
         sUrl: 'js/vendor/datatables/spanish.json'
        },
        dom: 'Bfrtip',
        lengthChange: false,
        autoWidth: false,
        responsive: true,
        buttons: [
             'copy','excel', 'pdf','colvis'
        ]

    });

    $.fn.dataTable.ext.errMode = 'throw';
   
   setInterval (table.ajax.reload, 15000);
   console.log('actualizado',table);
    });
</script>
  @else
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $('#modal-delete').tooltip();

        var table= $('#dgwTabla').DataTable({
         "serverSide":false,
       "ajax":"{{url('api/orders')}}",
       "columns": [
           {data: 'id'},
           {data: 'c_interno'},
           {data:'full_name'},
           {data:'position.name'},
           
           
           {data:'institution.nombre'},
           {data:'fecha.date'},
           {data:'btn'}

             ],
        language: {
         sUrl: 'js/vendor/datatables/spanish.json'
        },
        dom: 'Bfrtip',
        lengthChange: false,
        autoWidth: false,
        responsive: true,
        buttons: [
             'copy','excel', 'pdf','colvis'
        ]

    });

    $.fn.dataTable.ext.errMode = 'throw';
   
   setInterval (table.ajax.reload, 15000);
   console.log('actualizado',table);
    });
</script>
  @endif
@endforeach


  
 
 
 
 
 
 @endsection

@endsection
