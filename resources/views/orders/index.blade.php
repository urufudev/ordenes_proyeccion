@extends('layouts.app')
@section('title')
Lista de Ordenes de Proyección | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>LISTA DE ORDENES DE PROYECCIÓN</h4>
            </div>
            @can('orders.create')
            <div class="col-md-6">
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
                    <th>NOMBRE</th>
                    <th>CARGO</th>
                    <th>INSTITUCIÓN</th>
                    <th>FECHA</th>
                    <th>REFERENCIA</th>
                    
                    
                    <th width="5%" class="text-center">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td><b>{{$order->id}}</b></td>
                    <td>{{$order->nombre}} {{$order->ap_paterno}} {{$order->ap_materno}}</td>
                    <td>{{$order->position->name}}</td>
                    <td>{{$order->institution->nombre}}</td>
                    <td>{{$order->fecha}}</td>
                    <td>{{$order->referencia}}</td>
                   
                    {{-- @if($order->status=='ACTIVO')
                      <td class="text-success"><b>{{$order->status}}</b></td>

                    @elseif($order->status=='INACTIVO')
                      <td class="text-danger"><b>{{$order->status}}</b></td>

                    @endif --}}
                    
                    
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
                              <a href="" data-target="#modal-delete-{{$order->id}}" class="btn btn-outline-danger btn-rounded btn-floating" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="SUSPENDER">
                                <i class="far fa-trash-alt"></i>
                              </a>
                                {{-- @if($order->status=='ACTIVO')
                                <a href="" data-target="#modal-delete-{{$order->id}}" class="btn btn-outline-danger btn-rounded btn-floating" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="SUSPENDER">
                                  <i class="far fa-trash-alt"></i>
                                </a>

                                @elseif($order->status=='INACTIVO')
                                <a href="" data-target="#modal-delete-{{$order->id}}" class="btn btn-outline-warning btn-rounded btn-floating" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="ACTIVAR">
                                  <i class="far fa-check-square"></i>
                                </a>

                                @endif --}}
                              @endcan

                            
                        </div>
                        
                    </td>
                    @include('orders.modal')
                    @include('orders.show')
                </tr>
                
                @endforeach
            </tbody>
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



  <script>
     $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
         $('#modal-delete').tooltip();
         $('#dgwTabla').DataTable({
 
         language: {
                            "sProcessing":     "Procesando...",
                     "sLengthMenu":     "Mostrar _MENU_ registros",
                     "sZeroRecords":    "No se encontraron resultados",
                     "sEmptyTable":     "Ningún dato disponible en esta tabla",
                     "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                     "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                     "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                     "sInfoPostFix":    "",
                     "sSearch":         "Buscar:",
                     "sUrl":            "",
                     "sInfoThousands":  ",",
                     "sLoadingRecords": "Cargando...",
                     "oPaginate": {
                         "sFirst":    "Primero",
                         "sLast":     "Último",
                         "sNext":     "Siguiente",
                         "sPrevious": "Anterior"
                     },
                     "oAria": {
                         "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                         "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                     },
                     "buttons": {
                        
                            
                            "copy":"Copiar",
                            "colvis":"Filtro"
                }
                 },
         dom: 'Bfrtip',
         lengthChange: false,
         autoWidth: false,
         responsive: true,
         buttons: [
              'copy','excel', 'pdf','colvis'
         ]

     });
     });
 </script>
 
 
 
 
 
 @endsection

@endsection
