<?php

namespace App\Http\Controllers;

use App\Order;
use App\Gestion;
use App\Year;
use App\User;
use App\Level;
use App\Institution;
use App\Position;

use Carbon\Carbon;

use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $years=Year::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $levels=Level::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $positions=Position::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        return view('orders.create',compact('gestions','institutions','years','levels','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        $order = Order::create($request->all());

        return redirect()->route('orders.index')
            ->with('info', 'ORDEN DE PROYECCIÓN CREADO CON ÉXITO');
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

        $years=Year::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

     
       

        $levels=Level::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $positions=Position::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        return view('orders.edit',compact('gestions','institutions','years','levels','positions','order'));
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
        $order->fill($request->all())
        ->save();

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
        $year->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
    }
}
