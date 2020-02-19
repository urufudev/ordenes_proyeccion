<?php

namespace App\Http\Controllers;

use App\Workday;
use App\Http\Requests\WorkdayStoreRequest;
use App\Http\Requests\WorkdayUpdateRequest;
use Illuminate\Http\Request;

class WorkdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $workdays = Workday::orderBy('id', 'DESC')
            
            ->get();
        
        return view('workdays.index', compact('workdays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workdays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkdayStoreRequest $request)
    {
        $workday = Workday::create($request->all());

        return redirect()->route('workdays.index')
            ->with('info', 'HORAS DE TRABAJO CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function show(Workday $workday)
    {
        return view('workdays.show', compact('workday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function edit(Workday $workday)
    {
        return view('workdays.edit',compact('workday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function update(WorkdayUpdateRequest $request, Workday $workday)
    {
        $workday->fill($request->all())
            ->save();

        return redirect()->route('workdays.index')
            ->with('info', 'HORAS DE TRABAJO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workday  $workday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workday $workday)
    {
        if ($workday->status == 'ACTIVO') {
            $workday->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $workday->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
