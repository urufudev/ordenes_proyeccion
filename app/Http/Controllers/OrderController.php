<?php

namespace App\Http\Controllers;

use App\Order;
use App\Gestion;
use App\User;
use App\Level;
use App\Institution;
use App\Position;

use Carbon\Carbon;
use yajra\Datatables\Datatables;
use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator; 

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        foreach (auth()->user()->roles as $rol) {
            if ($rol->name == 'ADMINISTRADOR') {
                
                $orders=Order::orderBy('id','DESC')
                /* ->where('user_id','auth'()->user()->id) */
                ->where('status','=','ACTIVO')
                ->paginate(7);
            
                return view('orders.index', compact('orders'));


            }

            elseif ($rol->name == 'ADMINISTRADOR OP') {
                $oficina_id = auth()->user()->office->id;

                $usuarios = User::         
                where('status','=','ACTIVO')
                ->where('office_id',$oficina_id)
                
                ->get();
                
                $ordersFromUser = array();



                foreach($usuarios as $user){

                    

                    if($user->orders->count() > 0 ){
                        foreach($user->orders->where('status','=','ACTIVO') as $order){
                         /* foreach($user->orders->where('resp_name','=',$resp_name)->where('status','=','ACTIVO') as $order)   */ 
                            array_push($ordersFromUser, $order);
                        }
                    }  
                }
                $orders = collect($ordersFromUser)->sortByDesc('id');
                //$leavesC = new LengthAwarePaginator($ordersFromUser, count($ordersFromUser), 7, 1, ['path'=>url('evaluations')]);
               /*  $ordersC = $this->paginate($ordersDesc, 7, $page, url('orders')); */
            /*  return $leavesC;   */
                
               return view('orders.index', compact('orders'));
            }

            elseif ($rol->name == 'RESPONSABLE OP') {
                
                $orders=Order::orderBy('id','DESC')
                ->where('user_id','auth'()->user()->id)
                ->where('status','=','ACTIVO')
                ->paginate(7);
            
                return view('orders.index', compact('orders'));
            }
        }

        

        $orders=Order::orderBy('id','DESC')
            ->where('user_id','auth'()->user()->id)
            ->where('status','=','ACTIVO')
            ->paginate(7);
        
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $gestions=Gestion::orderBy('cod_gestion','DESC')
        ->where('status','=','ACTIVO')
        ->pluck('cod_gestion','id');

        $institutions=Institution::orderBy('nombre','ASC')
        ->where('status','=','ACTIVO')
        ->pluck('nombre','id');


        $levels=Level::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $positions=Position::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        return view('orders.create',compact('gestions','institutions','levels','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        /* $order = Order::create($request->all()); */
        if($request->i_vigencia > $request->f_vigencia){
            return back()->withInput()
             ->withErrors(['fh_from' => 'LA FECHA DE INICIO ES MAYOR A LA FECHA DE FIN']);
        }
        else {
            $order = new Order();
            $order->user_id = $request->user_id;
            $order->gestion_id = $request->gestion_id;
            $order->institution_id = $request->institution_id;
          
            $order->level_id = $request->level_id;
            $order->position_id = $request->position_id;
            
            $order->c_interno =  $id = IdGenerator::generate(['table' => 'orders','field'=>'c_interno', 'length' => 9, 'prefix' =>date('Y-'),'reset_on_prefix_change'=>true]); //output: P00001 
            $order->fecha = $request->fecha;
            $order->n_expediente = $request->n_expediente;
            $order->folio = $request->folio;
            $order->nombre = $request->nombre;
            $order->ap_paterno = $request->ap_paterno;
            $order->ap_materno = $request->ap_materno;
            $order->o_plaza = $request->o_plaza;
            $order->d_plaza = $request->d_plaza;
            $order->lugar = $request->lugar;
            $order->distrito = $request->distrito;
            $order->provincia = $request->provincia;
            $order->accion = $request->accion;
            $order->referencia = $request->referencia;
            $order->i_vigencia = $request->i_vigencia;
            $order->f_vigencia = $request->f_vigencia;

            
            
            
            $order->save();
                    
            return redirect()->route('orders.index')
                ->with('info', 'ORDEN DE PROYECCIÓN CREADO CON ÉXITO');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $gestions=Gestion::orderBy('cod_gestion','DESC')
        ->where('status','=','ACTIVO')
        ->pluck('cod_gestion','id');

        $institutions=Institution::orderBy('nombre','ASC')
        ->where('status','=','ACTIVO')
        ->pluck('nombre','id');
    
       

        $levels=Level::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $positions=Position::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        return view('orders.edit',compact('gestions','institutions','levels','positions','order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(OrderUpdateRequest $request, Order $order)
    {

        if($request->i_vigencia > $request->f_vigencia){
            return back()->withInput()
             ->withErrors(['fh_from' => 'LA FECHA DE INICIO ES MAYOR A LA FECHA DE FIN']);
        }
        else {
        $order->fill($request->all())
        ->save();
            }
    return redirect()->route('orders.index')
        ->with('info', 'ORDEN DE PROYECCIÓN ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        if ($order->status == 'ACTIVO') {
            $order->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $order->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }

    public function pdf(Request $request,Order $order){
        

        if ($order->status == 'ACTIVO') {
            $id_generate = explode('-',$order->c_interno);
            $codigo = $id_generate[1];
            $year = $id_generate[0];

            $pdf = \PDF::loadView('pdf.order',compact('order','codigo','year'))->setPaper('A5', 'portrait');
            return $pdf->stream();
        }
        else {
            
            return back()->with('danger', 'LA ORDEN SE ENCUENTRA INACTIVA ');
        }

        /* $order = Order::find($order); */
        
        

    }
}
