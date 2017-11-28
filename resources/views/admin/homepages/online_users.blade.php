@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Utilizadores Online
@endsection

@section('main-content')
    {{--{{dd(Activity::users()->get())}}--}}
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mostrar Clientes</h3>
                    </div>
                    <div class="box-body">
                        {{--@include('admin.include.search')--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Função</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Activity::users()->get() as $activity)
                                <tr>
                                    <td>{{$activity->user_id}}</td>
                                    <td>{{$activity->user->name}}</td>
                                    <td>{{$activity->user->roles()->first()->display_name}}</td>
                                    <td>-</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--<div class="row" align="center">--}}
                            {{--{{$clients->links()}}--}}
                        {{--</div>--}}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection