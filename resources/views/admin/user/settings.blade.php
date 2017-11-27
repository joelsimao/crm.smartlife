@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Configurações - {{$user->name}}
@endsection

@section('contentheader_title')
    Configurações
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => '/user/'.$user->id, 'method' => 'PUT')) }}
            @include('admin.user._form_user_info', array('isEdit' => true))
            {{ Form::submit('Aplicar') }}
            {{Form::close()}}
            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection