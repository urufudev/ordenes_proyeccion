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
        

        $tags=explode(',',$request->tags);
        /* $resolution = Resolution::create($request->all()); */
        $resolution = new Resolution();
        $resolution->order_id = $request['order_id'];
        $resolution->user_id = $request['user_id'];
        $resolution->n_resolucion = $request['n_resolucion'];
        $resolution->fecha  =  $request['fecha'];
        $resolution->n_persona  =  $request['n_persona'];
        $resolution->accion  =  $request['accion'];
        $resolution->notificado  =  $request['notificado'];
        $resolution->status  =  'ACTIVO';
        $resolution->save();

        $resolution ->tag($tags);
        
        if($request->file('file')){
            $file = $request->file('file');
            

            $name = $request->n_resolucion.'_'.date('dmy_His').'.'.$file->getClientOriginalExtension();
            /* $path = Storage::disk('public')->put('pdf',$request->file('file',$name));
            */
            /* $path = $file->storeAs('pdf', $name); */

            $file->move(public_path().'/pdf',$name);

            $resolution->fill(['file'=>'/pdf/'.$name])->save();
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
        $orders=Order::orderBy('c_interno','DESC')
        ->where('status','=','ACTIVO')
        ->pluck('c_interno','id');
        
        $tags= $resolution->tagNames();
      

        return view('resolutions.edit',compact('resolution','orders','tags'));
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
        $tags=explode(',',$request->tags);
        $resolution->fill($request->all())
            ->save();
        $resolution ->tag($tags);
        /* $resolution->tag()->sync($request->get('tags')); */

        if($request->file('file')){
            $path = Storage::disk('public')->put('pdf',$request->file('file'));
             
            $resolution->fill(['file'=>asset($path)])->save();
        }

        dd($resolution);
        return redirect()->route('resolutions.index')
            ->with('info', 'RESOLUCION ACTUALIZADA CON EXITO');
    }


    public function destroy(Resolution $resolution)
    {
        //
    }
}
