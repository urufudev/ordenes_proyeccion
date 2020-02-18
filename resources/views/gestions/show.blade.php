
 <!-- Modal right -->
 <div class="modal fade modal-right" id="modal-show-{{$gestion->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                <label for="cod_gestion"><b>CODIGO DE GESTION</b></label>
                <p type="text" class="form-control" id="cod_gestion" >{{$gestion->cod_gestion}}</p>
          
              </div>
              <div class="col-md-12">
                <label for="n_resolucion"><b>NÚMERO DE RESOLUCIÓN</b></label>
                <p type="text" class="form-control" id="n_resolucion" >{{$gestion->n_resolucion}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="s_direccion"><b>SIGLAS DE DIRECCIÓN</b></label>
                <p type="text" class="form-control" id="s_direccion" >{{$gestion->s_direccion}}</p>
                
              </div>
              <div class="col-md-12">
                <label for="r_direccion"><b>RESPONSABLE DE DIRECCIÓN</b></label>
                <p type="text" class="form-control" id="r_direccion" >{{$gestion->r_direccion}}</p>
                
              </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-12">
                <label for="s_administracion"><b>SIGLAS DE ADMINISTRACIÓN</b></label>
                <p type="text" class="form-control" id="s_administracion" >{{$gestion->s_administracion}}</p>
            
              </div>
              <div class="col-md-12">
                <label for="r_administracion"><b>RESPONSABLE DE ADMINISTRACIÓN</b></label>
                <p type="text" class="form-control" id="r_administracion" >{{$gestion->r_administracion}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="s_dgi"><b>SIGLAS DE DGI</b></label>
                <p type="text" class="form-control" id="s_dgi" >{{$gestion->s_dgi}}</p>

              </div>
              <div class="col-md-12">
                <label for="r_dgi"><b>RESPONSABLE DE DGI</b></label>
                <p type="text" class="form-control" id="r_dgi" >{{$gestion->r_dgi}}</p>
                
              </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-12">
                <label for="s_dgp"><b>SIGLAS DE DGP</b> </label>
                <p type="text" class="form-control" id="s_dgp" >{{$gestion->s_dgp}}</p>
      
              </div>
              <div class="col-md-12">
                <label for="r_dgp"><b>RESPONSABLE DE DGP</b></label>
                <p type="text" class="form-control" id="r_dgp" >{{$gestion->r_dgp}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="s_personal"><b>SIGLAS DE PERSONAL</b></label>
                <p type="text" class="form-control" id="s_personal" >{{$gestion->s_personal}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="r_personal"><b>RESPONSABLE DE PERSONAL</b></label>
                <p type="text" class="form-control" id="r_personal" >{{$gestion->r_personal}}</p>
                  
                
              </div>
          </div>
          
          <div class="form-row">
              
            <div class="col-md-12">
                <label for="s_finanzas">SIGLAS DE FINANZAS</label>
                <p type="text" class="form-control" id="s_finanzas" >{{$gestion->s_finanzas}}</p>
                  
              </div>
              <div class="col-md-12">
                <label for="r_finanzas">RESPONSABLE DE FINANZAS</label>
                <p type="text" class="form-control" id="r_finanzas" >{{$gestion->r_finanzas}}</p>
                 
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-lg" data-dismiss="modal"><b>CERRAR</b> </button>
        
      </div>
    </div>
  </div>
</div>