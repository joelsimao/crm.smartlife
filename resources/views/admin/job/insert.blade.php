@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Profissão
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => '/job')) }}
             @include('admin.job._form_job')
            {{ Form::submit('Inserir') }}
            {{Form::close()}}

            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection

