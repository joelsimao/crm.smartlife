@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Gerente
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(array('url' => '/manager')) }}
                    @include('admin.manager._form_manager')
                    {{ Form::submit('Inserir') }}
                {{Form::close()}}

                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection