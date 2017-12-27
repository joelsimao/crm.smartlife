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
        $meo_clients=MeoClient::paginate(15);
        return view('admin.meo_client.index', compact('meo_clients'));
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
                'offer'             => $request->offers[$key],
            ];
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meo_client=MeoClient::findOrFail($id);
        $services_meo_client=DB::table('service_meo_client')->where('meo_client_id', $id)->get();
//        dd($services_meo_client);
        $services=collect();
        foreach ($services_meo_client as $service_meo_client){
            $service = Service::findOrFail($service_meo_client->service_id);
            $services->push($service);
        }
        return view('admin.meo_client.edit', compact('meo_client', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $meo_client=MeoClient::findOrFail($id);
        $meo_client->update($request->meo_client);
        $names=$request->names;
        $meo_client_services = DB::table('service_meo_client')->where('meo_client_id', $id)->get();

        foreach ($names as $key => $name){
            $monthly_payment=str_replace("€", "", $request->monthly_payments[$key]);
            if(str_contains($monthly_payment, ",")){
                $monthly_payment=str_replace(",", ".", $monthly_payment);
            }
            $service_array = [
                'name'              => $name,
                'description'       => $request->descriptions[$key],
                'monthly_payment'   => $monthly_payment,
                'offer'             => $request->offers[$key],
            ];
            if($key<=$meo_client_services->count()-1){
                $service=Service::findOrFail($meo_client_services[$key]->service_id);
                $service->update($service_array);
            } else {
                $service=Service::create($service_array);
                DB::table('service_meo_client')->insert(['meo_client_id' => $meo_client->id, 'service_id' => $service->id]);
            }
        }

        flash('Cliente Atualizado Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MeoClient  $meoClient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meo_client=MeoClient::findOrFail($id);
        $meo_client->delete();
        flash('Cliente Apagado Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }
}
