<?php

namespace App\Http\Controllers;

use App\Remunerative;
use App\Http\Requests\RemunerativeStoreRequest;
use App\Http\Requests\RemunerativeUpdateRequest;
use Illuminate\Http\Request;

class RemunerativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remuneratives = Remunerative::orderBy('id', 'DESC')
            
            ->get();
        
        return view('remuneratives.index', compact('remuneratives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('remuneratives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RemunerativeStoreRequest $request)
    {
        $remunerative = Remunerative::create($request->all());

        return redirect()->route('remuneratives.index')
            ->with('info', 'NIVEL REMUNERATIVO CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Remunerative  $remunerative
     * @return \Illuminate\Http\Response
     */
    public function show(Remunerative $remunerative)
    {
        return view('remuneratives.show', compact('remunerative'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Remunerative  $remunerative
     * @return \Illuminate\Http\Response
     */
    public function edit(Remunerative $remunerative)
    {
        return view('remuneratives.edit',compact('remunerative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remunerative  $remunerative
     * @return \Illuminate\Http\Response
     */
    public function update(RemunerativeUpdateRequest $request, Remunerative $remunerative)
    {
        $remunerative->fill($request->all())
            ->save();

        return redirect()->route('remuneratives.index')
            ->with('info', 'NIVEL REMUNERATIVO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remunerative  $remunerative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remunerative $remunerative)
    {
        if ($remunerative->status == 'ACTIVO') {
            $remunerative->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $remunerative->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
