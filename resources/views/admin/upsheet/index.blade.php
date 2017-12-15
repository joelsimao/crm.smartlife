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
                                <th>Data</th>
                                <th>Agência</th>
                                <th>Nome Titular</th>
                                <th>Idade</th>
                                <th>Profissão</th>
                                <th>Hora de Entrada</th>
                                <th>Hora de Saída</th>
                                <th>Total Tour</th>
                                <th>Nº de Voucher</th>
                                <th>Fecho</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->visit_date}}</td>
                                    <td>{{$client->agency->name." ". $client->agency->city}}</td>
                                    <td>{{$client->first_holder_name}}</td>
                                    <td>{{$client->first_holder_age}}</td>
                                    <td>{{$client->first_holder_job->name}}</td>
                                    <td>{{$client->entry_hour}}</td>
                                    <td>{{$client->leave_hour}}</td>
                                    <td>{{$client->h_tour}}</td>
                                    <td>{{$client->voucher}}</td>
                                    <td>{{$client->close}}</td>
                                    <td>
                                            {{ Form::open(array('url' => 'client/'.$client->id ,'method' => 'DELETE')) }}
                                                <a href="{{"upsheet/".$client->id."/edit"}}" class="btn btn-warning"><i class='fa fa-pencil'></i></a>
                                                <button type="submit" class="btn btn-danger"/><i class='fa fa-trash'></i></button>
                                            {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row" align="center">
                            {{$clients->links()}}
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
    @if(\Request::is('club/*') || \Request::is('club'))
        <div class="bottom-navbar" align="center">
            <h4>"{{\App\Phrase::all()->random(1)->first()->phrase}}"</h4>
        </div>
    @endif
@endsection

