<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q=Input::get('q');
        $ds=Input::get('ds');
        $de=Input::get('de');
        $clients = Client::paginate(15);
        return view('admin.client.show', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $client = $request->client;
        $voucher = $client["voucher_type"].$client["voucher_code"];
        if($client["to_id"] == 1){
            $to = "Sim";
        } else{
            $to = "Não";
        }
        if($client["close"] == 1){
            $close = "Sim";
        } else {
            $close = "Não";
        }
        $client=array_except($client, array('voucher_type', 'voucher_code', 'to_id', 'close'));
        $client=array_add($client, 'voucher', $voucher);
        $client=array_add($client, 'to', $to);
        $client=array_add($client, 'close', $close);
        Client::create($client);
        flash('Cliente Inserido Com Sucesso!!!')->important()->success();
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
        $client = Client::FindOrFail($id);
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $client = Client::FindOrFail($id);
        $client->update($request->client);
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
        $client = Client::FindOrFail($id);
        $client->delete();
        return redirect()->back();
    }
}
