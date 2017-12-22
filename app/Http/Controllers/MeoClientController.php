<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeoClientRequest;
use App\MeoClient;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeoClientController extends Controller
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
        return view('admin.meo_client.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MeoClientRequest $request)
    {
        $meo_client=MeoClient::create($request->meo_client);
        $names = $request["names"];
        foreach ($names as $key => $name){
            $monthly_payment=str_replace("€", "", $request->monthly_payments[$key]);
            if(str_contains($monthly_payment, ",")){
                $monthly_payment=str_replace(",", ".", $monthly_payment);
            }
            $service_array = [
                'name' => $name,
                'description' => $request->descriptions[$key],
                'monthly_payment' => $monthly_payment,
            ];
//            dd($service);
            $service=Service::create($service_array);
            DB::table('service_meo_client')->insert(['meo_client_id' => $meo_client->id, 'service_id' => $service->id]);
        }

        flash('Cliente Inserido Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function show(MeoClient $meoClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function edit(MeoClient $meoClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeoClient $meoClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeoClient $meoClient)
    {
        //
    }
}
