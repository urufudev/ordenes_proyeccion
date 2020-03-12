<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORDEN DE PROYECCIÓN</title>
    <link href="{{public_path().'/css/pdf.css'}}" rel="stylesheet"> 
</head>
<body style="margin:-4.5% 0;">
    
    <table class="table table-borderless table-sm" style="margin-bottom: 5px;">
        <thead>
            <tr>
            @if ($order->user->office->name == 'DIRECCIÓN DE GESTIÓN PEDAGÓGICA')
              <th scope="col-12" ><img src="{{public_path().'/images/cabeceras/cabecera_dgp.png'}}" height="78" ></th>
            
              @elseif($order->user->office->name == 'DIRECCIÓN DE GESTIÓN INSTITUCIONAL')
              <th scope="col-12" ><img src="{{public_path().'/images/cabeceras/cabecera_dgi.png'}}" height="78" ></th>
              
              @elseif($order->user->office->name == 'ÁREA DE PERSONAL')
              <th scope="col-12" ><img src="{{public_path().'/images/cabeceras/cabecera_personal.png'}}" height="78" ></th>
             
              @elseif($order->user->office->name == 'SECRETARÍA GENERAL')
              <th scope="col-12" ><img src="{{public_path().'/images/cabeceras/cabecera_secretaria.png'}}" height="78" ></th>
            @endif  
              
            
            </tr>
        </thead>
    </table>

    <table class="table table-borderless table-sm">
        <thead class="thead-dark">
        
            <tr>
                <th scope="col-10" width="95%"> 
                 
                    
                        <p class="text-center" style="font-size:12px;margin-bottom: 0px;">ORDEN DE PROYECCIÓN N° {{$codigo}}-{{$year}}-GRA/GG-GRDS-DREA-OA-AP</p> 
                       
                </th>
        
                
            </tr>
        </thead>
    </table>
    <table class="table table-sm  ">
        
        <tbody>
          <tr>
            <th scope="row" width="60%"></th>
            <td width="40%">
                <table class="table table-sm table-bordered" style="font-size:10px" >
        
                    <tbody>
                      <tr>
                        <th scope="row" class="align-middle" width="40%">SISGEDO</th>
                        <td  class="text-center">
                            {{$order->n_expediente}}
                        </td>
                        
                      </tr>
                      <tr>
                        <th scope="row" width="40%">FOLIO</th>
                        <td  class="text-center">
                            {{$order->folio}}
                        </td>
                        
                      </tr>
                    
                    </tbody>
                  </table>
            </td>
            
          </tr>
        
        </tbody>
      </table>

      <table class="table table-sm table-borderless"  style="font-size:12px">
        
        <tbody>
          <tr>
            <td class="text-justify p-1">Al Equipo de Administración de Personal, sírvase proyectar una Resolución Directoral Regional Sectorial de acuerdo a los antecedentes que se anexan, a favor de:  </td>
            
            
          </tr>
        
        </tbody>
      </table>


      <table class="table table-sm table-bordered" style="font-size:12px" >
        
        <tbody>
          <tr>
            <th scope="row" class="align-middle" width="30%" >APELLIDOS Y NOMBRES</th>
            <td class="align-middle" colspan="3" >
                {{$order->full_name}}
            </td>
            
          </tr>
          <tr>
            <th scope="row" class="align-middle"  width="30%">CARGO</th>
            <td class="align-middle" colspan="3" >
                {{$order->position->name}}
            </td>
            
          </tr>
          <tr>
            <th scope="row" class="align-middle" width="30%" >CENTRO DE TRABAJO</th>
            <td class="align-middle"  colspan="3">
                {{$order->institution->nombre}}
            </td>
            
          </tr>
          <tr>
            <th scope="row" class="align-middle" width="30%" >LUGAR - DISTRITO</th>
            <td class="align-middle"  colspan="3">
                {{$order->lugar}} - {{$order->distrito}}
            </td>
            
          </tr>
          <tr>
            <th scope="row" class="align-middle" width="30%" >NIVEL/MODALIDAD</th>
            <td class="align-middle"  colspan="3">
                {{$order->level->name}}
            </td>
            
          </tr>
          
          <tr>
            <th  width="20%">P. ORIGEN</th>
            <td width="25%"  class="text-center">
                {{$order->o_plaza}}
            </td>
            <th  width="30%">P. DESTINO</th>
            <td  class="text-center">
                {{$order->d_plaza}}
            </td>
            
          </tr>
          <tr>
            <th scope="row" class="align-middle" height="100px" width="30%" >ACCIÓN</th>
            <td class="align-middle text-justify" style="font-size:10px" colspan="3">
              {!! $order->accion !!}
            </td>
            
          </tr>
          <tr>
            <th scope="row" class="align-middle" width="30%" >REFERENCIA</th>
            <td class="align-middle"  colspan="3">
                {{$order->referencia}}
            </td>
            
          </tr>
          <tr>
            <th  width="20%">INICIO</th>
            <td width="25%"  class="text-center">
                {{ date('d/m/Y', strtotime($order->i_vigencia)) }}
            </td>
            <th  width="30%">TERMINO</th>
            <td  class="text-center">
              {{ date('d/m/Y', strtotime($order->f_vigencia)) }}
            </td>
            
          </tr>
         {{--  <tr>
           
            <td class="align-middle"  colspan="4">
              Ayacucho, {{$order->fecha->format('d \\d\\e F \\d\\e\\l Y')}}
              
              
            </td>
            
          </tr> --}}
        
        </tbody>
      </table>
   
      
      <p class="text-right p-1" style="font-size:12px">Ayacucho, {{$order->fecha->format('d \\d\\e F \\d\\e\\l Y')}}</p>

 

      <table class="table table-sm table-borderless  " >
        
        <tbody>
          <tr>
            <td height="40px"></td>
          </tr>
           @if ($order->user->office->name == 'DIRECCIÓN DE GESTIÓN PEDAGÓGICA')
              <tr>
                <td width="50%" >
                 
                </td>
                <td width="50%" >
                  <p class="text-center" style="font-size:10px; border-top:1px solid black;"><b>{{$order->gestion->r_dgp}}<b> </p>
                    <p class="text-center"  style="font-size:9px; margin:-2.5% 0;">{{$order->gestion->s_dgp}}</p>
                    <p class="text-center" style="font-size:9px; margin-top:2.2%;">DIRECCIÓN DE GESTIÓN PEDAGÓGICA</p>
                </td>
                
              </tr>
            
              @elseif($order->user->office->name == 'DIRECCIÓN DE GESTIÓN INSTITUCIONAL')
              <tr>
                <td width="50%" >
                 
                </td>
                <td width="50%" >
                  <p class="text-center" style="font-size:10px; border-top:1px solid black;"><b>{{$order->gestion->r_dgi}}<b> </p>
                    <p class="text-center"  style="font-size:9px; margin:-2.5% 0;">{{$order->gestion->s_dgi}}</p>
                    <p class="text-center" style="font-size:9px; margin-top:2.2%;">DIRECCIÓN DE GESTIÓN INSTITUCIONAL</p>
                </td>
                
              </tr>
              
              @elseif($order->user->office->name == 'ÁREA DE PERSONAL')
              <tr>
                <td width="50%" >
                 <p class="text-center" style="font-size:10px; border-top:1px solid black;"> <b>{{$order->gestion->r_personal}}<b>  </p>
                  <p class="text-center"  style="font-size:9px; margin:-2.5% 0;">{{$order->gestion->s_personal}}</p>
                  <p class="text-center" style="font-size:9px; margin-top:2.2%;">ÁREA DE PERSONAL</p>
                </td>
                <td width="50%" >
                  <p class="text-center" style="font-size:10px; border-top:1px solid black;"><b>{{$order->gestion->r_administracion}}<b> </p>
                    <p class="text-center"  style="font-size:9px; margin:-2.5% 0;">{{$order->gestion->s_administracion}}</p>
                    <p class="text-center" style="font-size:9px; margin-top:2.2%;">OFICINA DE ADMINISTRACIÓN</p>
                </td>
                
              </tr>
             
              @elseif($order->user->office->name == 'SECRETARÍA GENERAL')
              <tr>
                <td width="50%" >
                 
                </td>
                <td width="50%" >
                  <p class="text-center" style="font-size:10px; border-top:1px solid black;"><b>{{$order->gestion->r_secretaria}}<b> </p>
                    <p class="text-center"  style="font-size:9px; margin:-2.5% 0;">{{$order->gestion->s_secretaria}}</p>
                    <p class="text-center" style="font-size:9px; margin-top:2.2%;">SECRETARÍA GENERAL</p>
                </td>
                
              </tr>
            @endif  
          
          
        
        </tbody>
      </table>

    
   {{--  <table class="table table-borderless table-sm">
        <thead>
        <tr>
                <th scope="col-6" height="70px" width="50%" class="text-center">  

                  <p class="text-center" style="font-size:12px; border-top:1px solid black;">{{$order->gestion->r_personal}} </p>
                  <p class="text-center" style="font-size:10px; margin:-2.5% 0;">{{$order->gestion->s_personal}} </p>
                  <p class="text-center" style="font-size:10px; margin-top:2%;">Area de Personal </p>  
                 
              </th>
                <th scope="col-6" height="70px">  

                <p class="text-center" style="font-size:12px; border-top:1px solid black;">{{$order->gestion->r_administracion}} </p>
                <p class="text-center" style="font-size:10px; margin:-2.5% 0;">{{$order->gestion->s_administracion}} </p>
                <p class="text-center" style="font-size:10px; margin-top:2%;">Area de Personal </p>  
              </th>

            </tr>

            
            
            
        
        </thead>
    
    </table> --}}
  

   {{--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  --}}


   
</body>


</html>