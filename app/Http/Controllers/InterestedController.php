<?php

namespace App\Http\Controllers;


use App\Interested;
use App\Http\Requests\InterestedStoreRequest;
use App\Http\Requests\InterestedUpdateRequest;
use Illuminate\Http\Request;

class InterestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interesteds = Interested::orderBy('id', 'DESC')
            
            ->get();
        
        return view('interesteds.index', compact('interesteds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interesteds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterestedStoreRequest $request)
    {
        /* $interested = Interested::create($request->all()); */
        $interested = new Interested();
        $interested->dni = $request->dni;
        $interested->name = $request->name;
        $interested->ap_paterno = $request->ap_paterno;
        $interested->ap_materno = $request->ap_materno;
        $interested->slug = $request['slug_name'].'-'.$request['slug_appaterno'].'-'.$request['slug_apmaterno'];


        
        $interested->save();

        return redirect()->route('interesteds.index')
            ->with('info', 'INTERESADO CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function show(Interested $interested)
    {
        return view('interesteds.show', compact('interested'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function edit(Interested $interested)
    {
        /* dd($interested); */
        return view('interesteds.edit',compact('interested'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function update(InterestedUpdateRequest $request, Interested $interested)
    {
        $interested->fill($request->all())
            ->save();

        return redirect()->route('interesteds.index')
            ->with('info', 'AFP ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interested $interested)
    {
        if ($interested->status == 'ACTIVO') {
            $interested->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $interested->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
