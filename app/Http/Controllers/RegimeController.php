<?php

namespace App\Http\Controllers;

use App\Regime;
use App\Http\Requests\RegimeStoreRequest;
use App\Http\Requests\RegimeUpdateRequest;
use Illuminate\Http\Request;

class RegimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regimes = Regime::orderBy('id', 'DESC')
            
            ->get();
        
        return view('regimes.index', compact('regimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regimes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegimeStoreRequest $request)
    {
        $regime = Regime::create($request->all());

        return redirect()->route('regimes.index')
            ->with('info', 'REGIMEN LABORAL CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regime  $regime
     * @return \Illuminate\Http\Response
     */
    public function show(Regime $regime)
    {
        return view('regimes.show', compact('regime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regime  $regime
     * @return \Illuminate\Http\Response
     */
    public function edit(Regime $regime)
    {
        return view('regimes.edit',compact('regime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regime  $regime
     * @return \Illuminate\Http\Response
     */
    public function update(RegimeUpdateRequest $request, Regime $regime)
    {
        $regime->fill($request->all())
            ->save();

        return redirect()->route('regimes.index')
            ->with('info', 'REGIMEN LABORAL ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regime  $regime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regime $regime)
    {
        if ($regime->status == 'ACTIVO') {
            $regime->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $regime->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
