
 <!-- Modal right -->
 <div class="modal fade modal-right" id="modal-show-{{$provided->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">VER GESTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
              <div class="col-md-6">
                <label for="n_expediente"><b>SISGEDO</b></label>
                <textarea type="text" class="form-control" id="n_expediente" >{{$provided->n_expediente}}</textarea>
          
              </div>
              <div class="col-md-6">
                <label for="i_contrato"><b>INICIO CONTRATO</b></label>
                <p class="form-control mb-3" id="i_contrato" readonly>{{$provided->fecha}}</p>
                  
              </div>
              <div class="col-md-6">
                <label for="f_contrato"><b>FIN CONTRATO</b></label>
                <p class="form-control mb-3" id="f_contrato" readonly>{{$provided->fecha}}</p>
                  
              </div>

              <div class="col-md-12">
                <label for="name"><b>NOMBRE COMPLETO</b></label>
                <textarea class="form-control mb-3" id="name" readonly>{{$provided->full_name}}</textarea>
                  
              </div>
              <div class="col-md-12">
                <label for="motivo"><b>ESTUDIOS</b></label>
                  {{-- <div class="pdn-10 pdn-sm-15 bdr d-flex flex-column">
                    {!! $provided->accion !!}
                  </div> --}}
                  {!! $provided->estudios !!}
                  <hr>
              </div>
              <div class="col-md-12">
                <label for="position_id"><b>CARGO</b></label>
                <p class="form-control mb-3" id="position_id" readonly>{{$provided->position->name}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="institution_id"><b>INSTITUCIÓNS</b></label>
                <textarea class="form-control mb-3" id="institution_id" readonly>{{$provided->institution->nombre}}</textarea>
                  
              </div>
              <div class="col-md-12">
                <label for="motivo"><b>MOTIVO</b></label>
                  {{-- <div class="pdn-10 pdn-sm-15 bdr d-flex flex-column">
                    {!! $provided->accion !!}
                  </div> --}}
                  {!! $provided->accion !!}
                  <hr>
              </div>
              <div class="col-md-12">
                <label for="referencia"><b>REFERENCIA</b></label>
                <textarea class="form-control mb-3" id="referencia" readonly>{{$provided->referencia}}</textarea>
                  
              </div>
              
              {{-- <div class="col-md-12">
                <label for="description"><b>ESTADO</b></label>
                @if($provided->status=='ACTIVO')
                  <p class="text-success"><b>{{$provided->status}}</b></p>
                @elseif($provided->status=='INACTIVO')
                  <p class="text-danger"><b>{{$provided->status}}</b></p>
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