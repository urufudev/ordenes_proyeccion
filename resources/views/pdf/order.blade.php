<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORDEN DE PROYECCIÓN</title>
    <link href="{{public_path().'/css/pdf.css'}}" rel="stylesheet"> 
</head>
<body>
    
    <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col-12" ><img src="{{public_path().'/images/header.png'}}" height="90" ></th>
            </tr>
        </thead>
    </table>

    <table class="table table-borderless table-sm">
        <thead class="thead-dark">
        
            <tr>
                <th scope="col-10" width="95%"> 
                 
                    
                        <p class="text-center" style="font-size:12px;margin-bottom: 0px;">ORDEN DE PROYECCIÓN N° {{$order->id}}-{{$order->year->name}}-GRA/GG-GRDS-DREA-OA-AP</p> 
                       
                </th>
        
                
            </tr>
        </thead>
    </table>
    <table class="table table-sm ">
        
        <tbody>
          <tr>
            <th scope="row" width="60%"></th>
            <td width="40%">
                <table class="table table-sm table-bordered" style="font-size:10px" >
        
                    <tbody>
                      <tr>
                        <th scope="row" width="40%">SISGEDO</th>
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

      <table class="table table-sm "  style="font-size:14px">
        
        <tbody>
          <tr>
            <td class="text-justify">Al Equipo de Administración de Personal, sírvase proyectar una Resolución Directoral Regional Sectorial de acuerdo a los antecedentes que se anexan, a favor de:  </td>
            
            
          </tr>
        
        </tbody>
      </table>


      <table class="table table-sm table-bordered" style="font-size:14px" >
        
        <tbody>
          <tr>
            <th scope="row" width="40%">SISGEDO</th>
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
    <table class="table  table-bordered">
        <thead>
            {{-- 
                
                <th scope="row"><b>SISGEDO</b> </th>
            <td class="text-center">{{$order->n_expediente}}</td>
            <td><b>Folio</b> </td>
            <td class="text-center">{{$order->folio}}</td>
                
                <tr>
                <th scope="col-6" >  

                    <p class="text-left" style="font-size:15px; text-">TRABAJADOR/A: </p>
                    <p class="text-left font-weight-normal">{{$leave->user->ap_paterno}} {{$leave->user->ap_materno}}, {{$leave->user->name}} </p>
                   
                </th>
                <th scope="col-6"  >  

                    <p class="text-left" style="font-size:15px; text-">REGIMEN LABORAL: </p>
                    <p class="text-left font-weight-normal">{{$leave->user->regime}}</p>
                   
                </th>
            </tr>
            <tr>
                <th scope="col-6" colspan="2">  

                    <p class="text-left" style="font-size:15px; text-">DEPENDENCIA: </p>
                    <p class="text-left font-weight-normal">{{$leave->user->office->name}}</p>
                   
                </th>
            </tr>
            <tr>
                <th scope="col-6"  width="40%" >  

                    <p class="text-left"  style="font-size:15px; text-">TIPO DE PAPELETA: </p>
                    <p class="text-left font-weight-normal">{{$leave->leavetype->name}}</p>
                   
                </th>
                <th scope="col-6" >  

                    <p class="text-left" style="font-size:15px; text-">DESCRIPCION: </p>
                    <p class="text-left font-weight-normal">{{$leave->description}}</p>
                   
                </th>
            </tr>
            
            
            <tr>
                <th scope="col-6">  

                    <p class="text-right" style="font-size:15px;">F/H DE SALIDA: </p>
                    <p class="text-right font-weight-normal">{{ date('d/m/Y H:i', strtotime($leave->fh_from)) }}</p>
                    

                </th>
                <th scope="col-6">  

                <p class="text-center" style="font-size:15px;">FECHA DE EMISIÓN: </p>
                    <p class="text-center font-weight-normal">{{$leave->created_at->format('d/m/Y H:i')}}</p>
        
                </th>
                
            </tr>
            <tr>
                <th scope="col-6">  

                    <p class="text-right" style="font-size:15px;">F/H DE RETORNO: </p>
                    <p class="text-right font-weight-normal">{{ date('d/m/Y H:i', strtotime($leave->fh_to)) }} </p>
                    
                   

                </th>
                <th scope="col-6">  

                <p class="text-center" style="font-size:15px;">FECHA DE AUTORIZACIÓN / RESPONSABLE: </p>
                    <p class="text-center font-weight-normal">{{ date('d/m/Y H:i', strtotime($leave->resp_chdate)) }}  </p>
                    <p class="text-center font-weight-normal">{{$leave->resp_name}} </p>
                
                </th>
                    
            </tr>
 --}}

           
            
        </thead>
    </table>

    
    <table class="table table-borderless">
        <thead>
        <tr>
                <th scope="col-6" height="140" width="50%" class="text-center">  

              {{--   <img style="border:1px solid black;margin:0"  src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(170)->generate('LA PAPELETA N° '.$leave->id.' ES '.$leave->resp_status.' POR '.$leave->resp_name.' A LAS '.$leave->resp_chdate)) }} ">
                  --}}   </th>
                <th scope="col-6" height="140">  

                <p class="text-center" style="font-size:15px; border-top:1px solid black;">FIRMA DEL/LA TRABAJADOR/A </p>
        
                </th>

            </tr>
        
        </thead>
    
    </table>
  

   {{--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  --}}


   
</body>


</html>