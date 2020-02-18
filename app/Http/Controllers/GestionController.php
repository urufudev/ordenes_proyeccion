<?php

namespace App\Http\Controllers;

use App\Gestion;
use App\Http\Requests\GestionStoreRequest;
use App\Http\Requests\GestionUpdateRequest;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestions = Gestion::orderBy('id', 'DESC')
            /* ->where('status', '=', 'ACTIVO') */
            ->get();
        
        return view('gestions.index', compact('gestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GestionStoreRequest $request)
    {
        $gestion = Gestion::create($request->all());

        return redirect()->route('gestions.index')
            ->with('info', 'GESTION CREADA CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion $gestion)
    {
        return view('gestions.show', compact('gestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion $gestion)
    {
        return view('gestions.edit',compact('gestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function update(GestionUpdateRequest $request, Gestion $gestion)
    {
       $gestion->fill($request->all())
            ->save();

        return redirect()->route('gestions.index')
            ->with('info', 'GESTION ACTUALIZADA CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestion  $gestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestion $gestion)
    {
        if ($gestion->status == 'ACTIVO') {
            $gestion->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $gestion->update(['status' => 'ACTIVO']);
            return back()->with('danger', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
