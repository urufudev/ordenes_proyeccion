<?php

namespace App\Http\Controllers;

use App\User;
use App\Office;
use App\Regime;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')
            ->where('status', '=', 'ACTIVO')
            ->get();
        
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices=Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');
        $regimes=Regime::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        

        return view('users.create',compact('offices','regimes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user=new User;

        $user->name = $request['name'];
        $user->ap_paterno = $request['ap_paterno'];
        $user->ap_materno = $request['ap_materno'];
        $user->dni  =  $request['dni'];
        $user->gender  =  $request['gender'];
        $user->f_birth  =  $request['f_birth'];
        $user->office_id  =  $request['office_id'];
        $user->regime_id  =  $request['regime_id'];
        $user->position  =  $request['position'];
        $user->phone  =  $request['phone'];
        $user->email  =  $request['email'];
        $user->password  =  bcrypt($request['password']);
        
        $user->save();

        


        //actualize los roles
/*         $user->roles()->sync($request->get('roles'));
 */

        return redirect()->route('users.index')
            ->with('info','USUARIO ACTUALIZADO CON EXITO');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
       /*  dd($user); */
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $offices=Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');
        $regimes=Regime::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        return view('users.edit',compact('user','offices','regimes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        
        $user->name = $request['name'];
        $user->ap_paterno = $request['ap_paterno'];
        $user->ap_materno = $request['ap_materno'];
        $user->dni  =  $request['dni'];
        $user->gender  =  $request['gender'];
        $user->f_birth  =  $request['f_birth'];
        $user->office_id  =  $request['office_id'];
        $user->position  =  $request['position'];
        $user->regime_id  =  $request['regime_id'];
        $user->phone  =  $request['phone'];
        $user->email  =  $request['email'];
        
        if($request['password']!=null)
        {
            $user->password  =  bcrypt($request['password']);
        }
        $user->save();

        


        //actualize los roles
       /*  $user->roles()->sync($request->get('roles')); */


        return redirect()->route('users.index')
            ->with('info','USUARIO ACTUALIZADO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->update(['status' => 'INACTIVO']);


        return back()->with('danger', 'USUARIO ELIMINADO CORRECTAMENTE ');
    }
}
