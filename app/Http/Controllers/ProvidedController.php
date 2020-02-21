<?php

namespace App\Http\Controllers;

use App\Provided;
use App\Gestion;
use App\Year;
use App\User;
use App\Level;
use App\Institution;
use App\Position;
use App\Workday;
use App\Regime;
use App\Afp;
use App\Remunerative;
use App\Order;

use Carbon\Carbon;

use App\Http\Requests\ProvidedStoreRequest;
use App\Http\Requests\ProvidedUpdateRequest;

use Illuminate\Http\Request;

class ProvidedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provideds=Order::orderBy('id','DESC')
            ->where('user_id','auth'()->user()->id)
            ->where('status','=','ACTIVO')
            ->paginate(7);
        
        return view('provideds.index', compact('provideds'));
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

        $regimes=Regime::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $workdays=Workday::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');
        
        $afps=Afp::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $remuneratives=Remunerative::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $orders=Order::orderBy('id','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('id');
        

        $t_documents = collect([
            ['id'=>'1','name' => 'DNI'],
            ['id'=>'2','name' => 'CE'],
            ['id'=>'3','name' => 'PTP']
        ])->pluck('name','id');
         


        return view('provideds.create',compact('orders','t_documents','gestions','institutions','years','levels','positions','regimes','workdays','afps','remuneratives'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provideds = Provided::create($request->all());

        return redirect()->route('provideds.index')
            ->with('info', 'PROVEIDO PRESUPUESTAL CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provided  $provided
     * @return \Illuminate\Http\Response
     */
    public function show(Provided $provided)
    {
        return view('provideds.show', compact('provided'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provided  $provided
     * @return \Illuminate\Http\Response
     */
    public function edit(Provided $provided)
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

        $regimes=Regime::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $workdays=Workday::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');
        
        $afps=Afp::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $remuneratives=Remunerative::orderBy('name','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $orders=Order::orderBy('id','DESC')
        ->where('status','=','ACTIVO')   
        ->pluck('id');
        

        $t_documents = collect([
            ['id'=>'1','name' => 'DNI'],
            ['id'=>'2','name' => 'CE'],
            ['id'=>'3','name' => 'PTP']
        ])->pluck('name','id');

        return view('provideds.edit',compact('orders','t_documents','gestions','institutions','years','levels','positions','regimes','workdays','afps','remuneratives'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provided  $provided
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provided $provided)
    {
        $provided->fill($request->all())
        ->save();

        return redirect()->route('provideds.index')
        ->with('info', 'ORDEN DE PROYECCIÓN ACTUALIZADO CON EXITO');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provided  $provided
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provided $provided)
    {
        $year->update(['status' => 'INACTIVO']);
        return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');

    }
}
