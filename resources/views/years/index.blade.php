@extends('layouts.app')
@section('title')
Lista de Años | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>LISTA DE AÑOS</h4>
            </div>
            @can('years.create')
            <div class="col-md-6">
                <a href="{{route('years.create')}}" class="btn btn-outline-dark float-right text-white btn-lg">
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
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCIÓN</th>
                    <th>NOMBRE</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCIÓN</th>
                    <th class="text-center">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($years as $year)
                <tr>
                    <td>{{$year->id}}</td>
                    <td>{{$year->name}}</td>
                    <td>{{$year->description}}</td>
                    <td>{{$year->name}}</td>
                    <td>{{$year->name}}</td>
                    <td>{{$year->description}}</td>
                    <td class="text-center">
                       {{--  <div class="btn-group m-2">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Opciones
                            </button>
                            <div class="dropdown-menu">
                              <a href="{{route('years.show',$year->id)}}" class="dropdown-item" >Ver</a>
                              <a href="{{route('years.edit',$year->id)}}" class="dropdown-item" >Editar</a>
                              <a data-target="#modal-delete-{{$year->id}}" class="dropdown-item" >Eliminar</a>

                            </div>
                          </div> --}}


                        <div class="btn-group pull-right" role="group" aria-label="Basic example">

                            <a href="{{route('years.show',$year->id)}}" class="btn btn-outline-primary  btn-rounded btn-floating mgn-r-10"  data-toggle="tooltip" data-placement="top" title="VER">
                                <i class="fas fa-search"></i>
                              </a>
                              <a  href="{{route('years.edit',$year->id)}}" class="btn btn-outline-success  btn-rounded btn-floating mgn-r-10" data-toggle="tooltip" data-placement="top" title="EDITAR">
                                <i class="far fa-edit"></i>
                              </a>
                              <a href="" data-target="#modal-delete-{{$year->id}}" class="btn btn-outline-danger btn-rounded btn-floating" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="ELIMINAR">
                                <i class="far fa-trash-alt"></i>
                              </a>

                            
                        </div>
                        
                    </td>
                    @include('years.modal')
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
