<?php

namespace App\Http\Controllers;

use App\Institution;
use App\Http\Requests\InstitutionStoreRequest;
use App\Http\Requests\InstitutionUpdateRequest;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Institution::orderBy('id', 'DESC')
            /* institution */
            ->get();
        
        return view('institutions.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitutionStoreRequest $request)
    {
        $institution = Institution::create($request->all());

        return redirect()->route('institutions.index')
            ->with('info', 'INSTITUCION CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function show(Institution $institution)
    {
        return view('institutions.show', compact('institution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        return view('institutions.edit',compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(InstitutionUpdateRequest $request, Institution $institution)
    {
        $institution->fill($request->all())
            ->save();

        return redirect()->route('institutions.index')
            ->with('info', 'INSTITUCION ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        if ($institution->status == 'ACTIVO') {
            $institution->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $institution->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
