<?php

namespace App\Http\Controllers;

use App\Permission;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions=Permission::paginate(15);
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission_array = $request->permission;
        if(str_contains($request->permission["display_name"], " "))
            $name = strtolower(str_replace(" ", "-", $request->permission["display_name"]));
        else
            $name=strtolower($request->permission["display_name"]);
        $permission_array=array_add($permission_array, 'name', $name);
        $permission_array=array_add($permission_array, 'created_at', Carbon::now()->toDateTimeString());
        $permission_array=array_add($permission_array, 'updated_at', Carbon::now()->toDateTimeString());
        Permission::create($permission_array);
        flash('Permissão Inserido Com Sucesso!!!')->important()->success();
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
        $permission=Permission::findOrFail($id);
        return view('admin.permissions.edit', compact('permission'));
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
        $permission=Permission::findOrFail($id);
        $permission->update($request->permission);
        flash('Permissão Atualizada Com Sucesso!!!')->important()->success();
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
        $permission=Permission::findOrFail($id);
        $permission->delete();
        flash('Permissão Apagada Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }
}
