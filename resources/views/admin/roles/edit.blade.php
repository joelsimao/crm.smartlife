@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Editar Cargo - {{$role->display_name}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(array('url' => 'administration/role/'.$role->id, 'method' => 'PUT')) }}
                @include('admin.roles._form_role_info', array('isEdit' => true))
                <button class="btn btn-info"><i class="fa fa-floppy-o fa-2x" aria-hidden="true" ></i><br>Guardar</button>
                <a href="{{url('/administration/roles')}}" class="btn btn-warning"><i class='fa fa-chevron-left fa-2x'></i><br> Voltar</a>
            {{--{{ Form::submit('<i class="fa fa-floppy-o" aria-hidden="true"> Guardar</i>', array('class' => 'btn btn-info')) }}--}}
            {{Form::close()}}

            <!-- /.box -->
            </div>
        </div>
    </div>
@endsection