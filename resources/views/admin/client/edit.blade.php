@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Editar Cliente - {{$client->first_holder_name}}
@endsection
@section('contentheader_title')
    Sócio Nº {{$client->id ." - ".$client->first_holder_name}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => 'club/client/'.$client->id, 'method' => 'PUT')) }}
                @include('admin.client._form_client_info', array('isEdit' => true))
                {{ Form::submit('Editar') }}
            {{Form::close()}}

            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
@section('phrases-content')
    @if(\Request::is('club/*') || \Request::is('club'))
        <div class="nav bottom-navbar" align="center">
            <h4>"{{\App\Phrase::all()->random(1)->first()->phrase}}"</h4>
        </div>
    @endif
@endsection
