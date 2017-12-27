@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Mostrar Clientes MEO
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mostrar Clientes MEO</h3>
                    </div>
                    <div class="box-body">
                        {{--@include('admin.include.search')--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>NIF</th>
                                <th>Localidade</th>
                                <th>Telefone</th>
                                <th>Telemóvel</th>
                                <th>Nome Gestor</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($meo_clients as $meo_client)
                                <tr>
                                    <td>{{$meo_client->id}}</td>
                                    <td>{{$meo_client->name}}</td>
                                    <td>{{$meo_client->nif}}</td>
                                    <td>{{$meo_client->city}}</td>
                                    <td>{{$meo_client->phone}}</td>
                                    <td>{{$meo_client->mobile_phone}}</td>
                                    <td>{{$meo_client->manager_name}}</td>
                                    <td>
                                        {{ Form::open(array('url' => 'database/meo_client/'.$meo_client->id ,'method' => 'DELETE')) }}
                                        <a href="{{"meo_client/".$meo_client->id."/edit"}}" class="btn btn-warning"><i class='fa fa-pencil'></i></a>
                                        <button type="submit" class="btn btn-danger"/><i class='fa fa-trash'></i></button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row" align="center">
                            {{$meo_clients->links()}}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection

@section('phrases-content')
    <div class="row" align="center">
        @if(\Request::is('database/*') || \Request::is('database'))
            <h4>"{{\App\Phrase::all()->random(1)->first()->phrase}}"</h4>
        @endif
    </div>
@endsection