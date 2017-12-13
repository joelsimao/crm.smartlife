<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = \App\Agency::paginate(15);
        return view('admin.agency.index', compact('agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agency.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->name = $request->agency["name"];
        $agency->city = $request->agency["city"];
        $agency->save();
        flash('Agência Inserida Com Sucesso!!!')->important()->success();
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
        dd("here");
        $agency = Agency::FindOrFail($id);
        $agency->delete();
        return redirect()->back();
    }

    public function update_agency(Request $request, $id)
    {
        $agency=Agency::findOrFail($id);
        $agency_array = ['name' => $request->name, 'city' => $request->city,];
        $agency->update($agency_array);

        return response()->json(array('status' => 'complete', 'name' => $request->name, 'city' => $request->city));
    }

    public function act_deact_agency(Request $request, $id){
        if($request->active == "true"){
            $active=true;
        } else{
            $active=false;
        }
        $agency=Agency::findOrFail($id);
        $agency->active = $active ;
        $agency->save();
        return response()->json(array('status' => 'complete', 'name' => $request->name, 'city' => $request->city));
    }

}
