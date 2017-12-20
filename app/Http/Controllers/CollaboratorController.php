<?php

namespace App\Http\Controllers;

use App\Collaborator;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collaborator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Make user that owns the collaborator7
//        dd($request->collaborator["district_id"]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt('smartlife1234');
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->save();
        $user->roles()->attach($request->roles);

        $collaborator = $request->collaborator;
        if($request->valid == 1);
            $collaborator= array_add($collaborator, 'valid', true);
        if($request->active == 1 )
            $collaborator= array_add($collaborator, 'active', true);
        $collaborator= array_add($collaborator, 'user_id', $user->id);
//        dd($collaborator);
        Collaborator::create($collaborator);
        flash('Colaborador Inserido Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborator $collaborator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborator $collaborator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborator $collaborator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collaborator  $collaborator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborator $collaborator)
    {
        //
    }
}
