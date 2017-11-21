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
            {{ Form::open(array('url' => '/client/'.$client->id, 'method' => 'PUT')) }}
                @include('admin.client._form_client_info', array('isEdit' => true))
                {{ Form::submit('Editar') }}
            {{Form::close()}}

            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
