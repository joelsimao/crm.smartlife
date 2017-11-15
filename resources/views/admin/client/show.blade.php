@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Mostrar Clientes
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mostrar Clientes</h3>
                    </div>
                    <div class="box-body">
                        @include('admin.include.search')
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Morada</th>
                                <th>Código Postal</th>
                                <th>Localidade</th>
                                <th>Nº de Telefone</th>
                                <th>Nº de Telemóvel</th>
                                <th>NIF</th>
                                <th>Profissão</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->first_holder_name}}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{{$client->zipcode}}</td>
                                    <td>{{$client->city}}</td>
                                    <td>{{$client->phone_number}}</td>
                                    <td>{{$client->mobile_phone_number}}</td>
                                    <td>{{$client->nif}}</td>
                                    <td>{{$client->job}}</td>
                                    <td>
                                            {{ Form::open(array('url' => 'client/'.$client->id ,'method' => 'DELETE')) }}
                                                <a href="{{"client/".$client->id."/edit"}}" class="btn btn-warning"><i class='fa fa-pencil'></i></a>
                                                <button type="submit" class="btn btn-danger"/><i class='fa fa-trash'></i></button>
                                            {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$clients->links()}}
                    </div>
                    <!-- /.box-body -->
                </div>
            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection

