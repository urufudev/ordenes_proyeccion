<?php

namespace App\Http\Controllers;

use App\Afp;
use App\Http\Requests\AfpStoreRequest;
use App\Http\Requests\AfpUpdateRequest;
use Illuminate\Http\Request;

class AfpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afps = Afp::orderBy('id', 'DESC')
            
            ->get();
        
        return view('afps.index', compact('afps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('afps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AfpStoreRequest $request)
    {
        $afp = Afp::create($request->all());

        return redirect()->route('afps.index')
            ->with('info', 'AFP CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Afp  $afp
     * @return \Illuminate\Http\Response
     */
    public function show(Afp $afp)
    {
        return view('afps.show', compact('afp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Afp  $afp
     * @return \Illuminate\Http\Response
     */
    public function edit(Afp $afp)
    {
        return view('afps.edit',compact('afp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Afp  $afp
     * @return \Illuminate\Http\Response
     */
    public function update(AfpUpdateRequest $request, Afp $afp)
    {
        $afp->fill($request->all())
            ->save();

        return redirect()->route('afps.index')
            ->with('info', 'AFP ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Afp  $afp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afp $afp)
    {
        if ($afp->status == 'ACTIVO') {
            $afp->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $afp->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
