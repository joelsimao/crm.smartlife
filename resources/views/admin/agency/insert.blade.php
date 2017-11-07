@extends('adminlte::layouts.app')

@section('htmlheader_title')
Inserir Agência
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => '/agency')) }}
            @include('admin.agency._form_agency')
            {{ Form::submit('Inserir') }}
            {{Form::close()}}
            <!-- /.box -->
        </div>
    </div>
</div>
@endsection