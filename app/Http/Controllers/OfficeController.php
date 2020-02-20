<?php

namespace App\Http\Controllers;

use App\Office;
use App\Http\Requests\OfficeStoreRequest;
use App\Http\Requests\OfficeUpdateRequest;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use App\RoleUser;
use DB;
use App\User;
class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::orderBy('id', 'DESC')
            
            ->get();
        
        return view('offices.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfficeStoreRequest $request)
    {
        $office = Office::create($request->all());

        return redirect()->route('offices.index')
            ->with('info', 'OFICINA CREADA CON ÉXITO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        return view('offices.show', compact('office'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office)
    {
        return view('offices.edit',compact('office'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(OfficeUpdateRequest $request, Office $office)
    {
        $office->fill($request->all())
            ->save();

        return redirect()->route('offices.index')
            ->with('info', 'OFICINA ACTUALIZADA CON EXITO');
    }

    public function roledit($id)
    {
        $office = Office::find($id);
        $roles = Role::all();
        $users = User::where('office_id', $office->id)
            ->get();

        return view('offices.roledit', compact('office', 'users', 'roles'));
    }

    public function rolupdate(Request $request, $id)
    {
        if ($request->roles == []) {
            return redirect()->back()
            ->with('danger', 'SELEECCIONE UN ROL');
        }
        foreach ($request->roles as $key => $value) {
            foreach ($request->users as $user_id) {
                
                if ($key == $user_id) {
                    
                        
                   /*  for ($i=0; $i <= count($roles_users); $i++) { 
                        DB::table('role_user')
                        ->where('user_id', $user_id)
                        ->delete();
                    }     */
                    $roleUsers = RoleUser::where('user_id', $user_id)->get();
                        
                        foreach ($roleUsers as $role_user) {
                            $role_user->delete();
                        }
                    
                    foreach ($value as $key => $rol_id) {
                        DB::table('role_user')
                            ->insert([
                                'role_id' => $rol_id,
                                'user_id' => $user_id,
                                
                            ]);
                            

                    }


                } else {
                    echo 'no existe el usuario';
                }

            }
        }
        return redirect()->route('offices.index')
            ->with('info', 'OFICINA ACTUALIZADA CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        if ($office->status == 'ACTIVO') {
            $office->update(['status' => 'INACTIVO']);
            return back()->with('danger', 'SE CAMBIO A INACTIVO CORRECTAMENTE ');
        }
        else {
            $office->update(['status' => 'ACTIVO']);
            return back()->with('info', 'SE CAMBIO A ACTIVO CORRECTAMENTE ');
        }
    }
}
