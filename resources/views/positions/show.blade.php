
 <!-- Modal right -->
 <div class="modal fade modal-right" id="modal-show-{{$position->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">VER CARGOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
              <div class="col-md-12">
                <label for="name"><b>NOMBRE</b></label>
                <p type="text" class="form-control" id="name" >{{$position->name}}</p>
          
              </div>
              <div class="col-md-12">
                <label for="description"><b>ESTADO</b></label>
                @if($position->status=='ACTIVO')
                  <p class="text-success"><b>{{$position->status}}</b></p>
                @elseif($position->status=='INACTIVO')
                  <p class="text-danger"><b>{{$position->status}}</b></p>
                @endif
                  
              </div>
              
          </div>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-lg" data-dismiss="modal"><b>CERRAR</b> </button>
        
      </div>
    </div>
  </div>
</div>