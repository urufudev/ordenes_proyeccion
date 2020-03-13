<div class="btn-group pull-right" role="group" aria-label="Basic example">
    @can('orders.show')
        <a href="" data-target="#modal-show-{{$id}}" class="btn btn-outline-primary  btn-rounded btn-floating mgn-r-10" data-toggle="modal" id="modal-show" class="btn btn-sm btn-danger"  data-placement="top" title="VER">
          <i class="fas fa-search"></i>
        </a>
        @endcan
        @can('orders.edit')
        <a  href="{{route('orders.edit',$id)}}" class="btn btn-outline-success  btn-rounded btn-floating mgn-r-10" data-toggle="tooltip" data-placement="top" title="EDITAR">
          <i class="far fa-edit"></i>
        </a>
        @endcan
        @can('orders.destroy')
        <a href="" data-target="#modal-delete-{{$id}}" class="btn btn-outline-danger btn-rounded btn-floating mgn-r-10" data-toggle="modal" id="modal-delete" class="btn btn-sm btn-danger"  data-placement="top" title="SUSPENDER">
          <i class="far fa-trash-alt"></i>
        </a>
        
        @endcan
        @can('orders.pdf')
          
              
              <a href="{{route('orders.pdf',$id)}}" class="btn btn-outline-info btn-rounded btn-floating" target="_blank"  data-toggle="tooltip" data-placement="top" title="IMPRIMIR">
              <i class="fas fa-print" ></i>
              </a>
         
        @endcan

      
  </div>