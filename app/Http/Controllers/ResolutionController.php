<?php

namespace App\Http\Controllers;

use App\Resolution;
use App\Order;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Http\Requests\ResolutionStoreRequest;
use App\Http\Requests\ResolutionUpdateRequest;
class ResolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resolutions = Resolution::orderBy('id', 'DESC')
            
            ->get();
        
        return view('resolutions.index', compact('resolutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders=Order::orderBy('c_interno','DESC')
        ->where('status','=','ACTIVO')
        ->pluck('c_interno','id');

        return view('resolutions.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/* ResolutionStore */Request $request)
    {
        $tags=explode(',',$request->interesados);
        $resolution = Resolution::create($request->all());
       /*  $resolution ->tag($tags) */;
        
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',$request->file('file'));
             
            $resolution->fill(['file'=>asset($path)])->save();
        }
        
        dd($resolution);

        return redirect()->route('resolutions.index')
            ->with('info', 'RESOLUCION CREADA CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resolution  $resolution
     * @return \Illuminate\Http\Response
     */
    public function show(Resolution $resolution)
    {
        return view('resolutions.show', compact('resolution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resolution  $resolution
     * @return \Illuminate\Http\Response
     */
    public function edit(Resolution $resolution)
    {
        return view('resolutions.edit',compact('resolution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resolution  $resolution
     * @return \Illuminate\Http\Response
     */
    public function update(/* ResolutionUpdate */Request $request, Resolution $resolution)
    {
        $resolution->fill($request->all())
            ->save();
        $resolution ->tag($tags);
        
        if($request->file('file')){
                $path = Storage::disk('public')->put('pdf',$request->file('file'));
                 
                $resolution->fill(['file'=>asset($path)])->save();
            }
        return redirect()->route('resolutions.index')
            ->with('info', 'RESOLUCION ACTUALIZADA CON EXITO');
    }


    public function destroy(Resolution $resolution)
    {
        //
    }
}
