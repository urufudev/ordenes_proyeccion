@extends('layouts.app')
@section('title')
Lista de Interesados | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>LISTA DE INTERESADOS</h4>
            </div>
            @can('interesteds.create')
            <div class="col-md-6">
                <a href="{{route('interesteds.create')}}" class="btn btn-outline-dark float-right text-white btn-lg">
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
                    <th>DNI</th>
                    <th>NOMBRE COMPLETO</th>
                    <th width="7%">ESTADO</th>
                    
                    <th width="5%" class="text-center">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($interesteds as $interested)
                <tr>
                    <td><b>{{$interested->id}}</b></td>
                    <td>{{$interested->dni}}</td>
                    <td>{{$interested->full_name}}</td>
                   
                    @if($interested->status=='ACTIVO')
                      <td class="text-success"><b>{{$interested->status}}</b></td>

                    @elseif($interested->status=='INACTIVO')
                      <td class="text-danger"><b>{{$interested->status}}</b></td>

                    @endif
                    
                    
                    <td class="text-center">
                      
                        <div class="btn-group pull-right" role="group" aria-label="Basic example">
                          @can('interesteds.show')
                              <a href="" data-target="#modal-show-{{$interested->id}}" class="btn btn-outline-primary  btn-rounded btn-floating mgn-r-10" data-toggle="modal" id="modal-show" class="btn btn-sm btn-danger"  data-placement="top" title="VER">
                                <i class="fas fa-search"></i>
                              </a>
                              @endcan
                              @can('interesteds.edit')
                              <a  href="{{route('interesteds.edit',$interested->id)}}" class="btn btn-outline-success  btn-rounded btn-floating mgn-r-10" data-toggle="tooltip" data-placement="top" title="EDITAR">
                                <i class="far fa-edit"></i>
                              </a>
                              @endcan
                              @can('interesteds.destroy')
                              
                                @if($interested->status=='ACTIVO')
                                <a href="" data-target="#modal-delete-{{$interested->id}}" class="btn btn-outline-danger btn-rounded btn-floating" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="SUSPENDER">
                                  <i class="far fa-trash-alt"></i>
                                </a>

                                @elseif($interested->status=='INACTIVO')
                                <a href="" data-target="#modal-delete-{{$interested->id}}" class="btn btn-outline-warning btn-rounded btn-floating" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="ACTIVAR">
                                  <i class="far fa-check-square"></i>
                                </a>

                                @endif
                              @endcan

                            
                        </div>
                        
                    </td>
                    @include('interesteds.modal')
                    @include('interesteds.show')
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
