{{-- @extends('layouts.app')
@section('title')
Ver Gestion | Sistema de Administración de Personal
@endsection

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header pdn-20  ">
        <div class="row">
            <div class="col-md-6 pdn-sm-y-10">
                <h4>VER GESTION</h4>
            </div>
            <div class="col-md-6">
                <a href="{{route('gestions.index')}}" class="btn btn-outline-dark float-right text-white btn-lg">
                    <b>VOLVER</b> 
            </a>        
            </div> 
        </div>
        
      </div>
      <div class="card-body ">
            
           
            
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="cod_gestion">CODIGO DE GESTION</label>
                <p type="text" class="form-control" id="cod_gestion" >{{$gestion->cod_gestion}}</p>
          
              </div>
              <div class="col-md-3 mb-3">
                <label for="n_resolucion">NÚMERO DE RESOLUCIÓN</label>
                <p type="text" class="form-control" id="n_resolucion" >{{$gestion->n_resolucion}}</p>
                  
              </div>
              <div class="col-md-2 mb-3">
                <label for="s_direccion">SIGLAS DE DIRECCIÓN</label>
                <p type="text" class="form-control" id="s_direccion" >{{$gestion->s_direccion}}</p>
                
              </div>
              <div class="col-md-4 mb-3">
                <label for="r_direccion">RESPONSABLE DE DIRECCIÓN</label>
                <p type="text" class="form-control" id="r_direccion" >{{$gestion->r_direccion}}</p>
                
              </div>
          </div>
          
          <div class="form-row">
              <div class="col-md-2 mb-3">
                <label for="s_administracion">SIGLAS DE ADMINISTRACIÓN</label>
                <p type="text" class="form-control" id="s_administracion" >{{$gestion->s_administracion}}</p>
            
              </div>
              <div class="col-md-4 mb-3">
                <label for="r_administracion">RESPONSABLE DE ADMINISTRACIÓN</label>
                <p type="text" class="form-control" id="r_administracion" >{{$gestion->r_administracion}}</p>
                  
              </div>
              <div class="col-md-2 mb-3">
                <label for="s_dgi">SIGLAS DE DGI</label>
                <p type="text" class="form-control" id="s_dgi" >{{$gestion->s_dgi}}</p>

              </div>
              <div class="col-md-4 mb-3">
                <label for="r_dgi">RESPONSABLE DE DGI</label>
                <p type="text" class="form-control" id="r_dgi" >{{$gestion->r_dgi}}</p>
                
              </div>
          </div>
          
          <div class="form-row">
              <div class="col-md-2 mb-3">
                <label for="s_dgp">SIGLAS DE DGP</label>
                <p type="text" class="form-control" id="s_dgp" >{{$gestion->s_dgp}}</p>
      
              </div>
              <div class="col-md-4 mb-3">
                <label for="r_dgp">RESPONSABLE DE DGP</label>
                <p type="text" class="form-control" id="r_dgp" >{{$gestion->r_dgp}}</p>
                  
              </div>
              <div class="col-md-2 mb-3">
                <label for="s_personal">SIGLAS DE PERSONAL</label>
                <p type="text" class="form-control" id="s_personal" >{{$gestion->s_personal}}</p>
                  
              </div>
              <div class="col-md-4 mb-3">
                <label for="r_personal">RESPONSABLE DE PERSONAL</label>
                <p type="text" class="form-control" id="r_personal" >{{$gestion->r_personal}}</p>
                  
                
              </div>
          </div>
          
          <div class="form-row">
              
              <div class="col-md-2 mb-3">
                <label for="s_finanzas">SIGLAS DE FINANZAS</label>
                <p type="text" class="form-control" id="s_finanzas" >{{$gestion->s_finanzas}}</p>
                  
              </div>
              <div class="col-md-4 mb-3">
                <label for="r_finanzas">RESPONSABLE DE FINANZAS</label>
                <p type="text" class="form-control" id="r_finanzas" >{{$gestion->r_finanzas}}</p>
                 
              </div>
          </div>


       
      </div>
    </div>
  </div>
@endsection
 --}}
