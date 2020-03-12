
 <!-- Modal right -->
 <div class="modal fade modal-right" id="modal-show-{{$order->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">VER ORDEN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
              <div class="col-md-12">
                <label for="n_expediente"><b>SISGEDO</b></label>
                <textarea type="text" class="form-control" id="n_expediente" >{{$order->n_expediente}}</textarea>
          
              </div>
              <div class="col-md-12">
                <label for="fecha"><b>FECHA</b></label>
                <p class="form-control mb-3" id="fecha" readonly>{{ date('d/m/Y', strtotime($order->fecha)) }}</p>
                  
              </div>

              <div class="col-md-12">
                <label for="name"><b>NOMBRE COMPLETO</b></label>
                <textarea class="form-control mb-3" id="name" readonly>{{$order->nombre}} {{$order->ap_paterno}} {{$order->ap_materno}}</textarea>
                  
              </div>
              <div class="col-md-12">
                <label for="position_id"><b>CARGO</b></label>
                <p class="form-control mb-3" id="position_id" readonly>{{$order->position->name}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="institution_id"><b>INSTITUCIÓNS</b></label>
                <textarea class="form-control mb-3" id="institution_id" readonly>{{$order->institution->nombre}}</textarea>
                  
              </div>
              <div class="col-md-12">
                <label for="acciones"><b>ACCIONES A TOMAR</b></label>
                  {{-- <div class="pdn-10 pdn-sm-15 bdr d-flex flex-column">
                    {!! $order->accion !!}
                  </div> --}}
                  {!! $order->accion !!}
                  <hr>
              </div>
              <div class="col-md-12">
                <label for="referencia"><b>REFERENCIA</b></label>
                <textarea class="form-control mb-3" id="referencia" readonly>{{$order->referencia}}</textarea>
                  
              </div>
              
              {{-- <div class="col-md-12">
                <label for="description"><b>ESTADO</b></label>
                @if($order->status=='ACTIVO')
                  <p class="text-success"><b>{{$order->status}}</b></p>
                @elseif($order->status=='INACTIVO')
                  <p class="text-danger"><b>{{$order->status}}</b></p>
                @endif
                  
              </div> --}}
              
          </div>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-lg" data-dismiss="modal"><b>CERRAR</b> </button>
        
      </div>
    </div>
  </div>
</div>