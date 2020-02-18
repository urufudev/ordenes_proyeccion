
 <!-- Modal right -->
 <div class="modal fade modal-right" id="modal-show-{{$institution->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
              <div class="col-md-12">
                <label for="codigo"><b>CÓDIGO</b></label>
                <p type="text" class="form-control" id="codigo" >{{$institution->codigo}}</p>
          
              </div>
              <div class="col-md-12">
                <label for="modular"><b>CÓDIGO MODULAR</b></label>
                <p type="text" class="form-control" id="modular" >{{$institution->modular}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="nombre"><b>NOMBRE</b>SIGLAS DE DIRECCIÓN</b></label>
                <p type="text" class="form-control" id="nombre" >{{$institution->nombre}}</p>
                
              </div>
              <div class="col-md-12">
                <label for="nivel"><b>NIVEL</b></label>
                <p type="text" class="form-control" id="nivel" >{{$institution->nivel}}</p>
                
              </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-12">
                <label for="ugel"><b>UGEL</b></label>
                <p type="text" class="form-control" id="ugel" >{{$institution->ugel}}</p>
            
              </div>
              <div class="col-md-12">
                <label for="provincia"><b>PROVINCIA</b></label>
                <p type="text" class="form-control" id="provincia" >{{$institution->provincia}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="distrito"><b>DISTRITO</b></label>
                <p type="text" class="form-control" id="distrito" >{{$institution->distrito}}</p>

              </div>
              <div class="col-md-12">
                <label for="lugar"><b>LUGAR</b></label>
                <p type="text" class="form-control" id="lugar" >{{$institution->lugar}}</p>
                
              </div>
          </div>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-lg" data-dismiss="modal"><b>CERRAR</b> </button>
        
      </div>
    </div>
  </div>
</div>