<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;

use App\Http\Requests\YearStoreRequest;
use App\Http\Requests\YearUpdateRequest;

use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use DB;
class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::orderBy('id', 'DESC')
            ->where('status', '=', 'ACTIVO')
            ->get();
        
        return view('years.index', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('years.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(YearStoreRequest $request)
    {
        $year = Year::create($request->all());

        return redirect()->route('years.index')
            ->with('info', 'AÑO CREADO CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        

        return view('years.show', compact('year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $year)
    {
        return view('years.edit',compact('year'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(YearUpdateRequest $request, Year $year)
    {

        $year->fill($request->all())
            ->save();

        return redirect()->route('years.index')
            ->with('info', 'AÑO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function destroy(Year $year)
    {
        $year->update(['status' => 'INACTIVO']);


        return back()->with('danger', 'AÑO ELIMINADO CORRECTAMENTE ');
    }
}
