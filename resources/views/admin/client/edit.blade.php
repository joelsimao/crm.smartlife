@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Editar Cliente - {{$client->name}}
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
