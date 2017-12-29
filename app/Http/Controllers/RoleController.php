<?php

namespace App\Http\Controllers;

use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::paginate(15);
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role_array = $request->role;
        if(str_contains($request->role["display_name"], " "))
            $name = strtolower(str_replace(" ", "-", $request->role["display_name"]));
        else
            $name=strtolower($request->role["display_name"]);
        $role_array=array_add($role_array, 'name', $name);
        $role_array=array_add($role_array, 'created_at', Carbon::now()->toDateTimeString());
        $role_array=array_add($role_array, 'updated_at', Carbon::now()->toDateTimeString());
        $role=Role::create($role_array);
        $role->perms()->sync($request->permissions);
        flash('Cargo Inserido Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Role::findOrFail($id);
        $role_permissions=$role->perms()->get();
        return view('admin.roles.edit', compact('role', 'role_permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role=Role::findOrFail($id);
        $role->update($request->role);
        $role->perms()->sync($request->permissions);
        flash('Cargo Atualizado Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::findOrFail($id);
        $role->delete();
        flash('Cargo Apagado Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }
}
