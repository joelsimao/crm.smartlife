@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Editar Permissão - {{$permission->display_name}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(array('url' => 'administration/permission/'.$permission->id, 'method' => 'PUT')) }}
                @include('admin.permissions._form_permission_info', array('isEdit' => true))
                <button class="btn btn-info"><i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i><br>Guardar</button>
                <a href="{{url('/administration/permission_area')}}" class="btn btn-warning"><i class='fa fa-chevron-left fa-2x'></i><br> Voltar</a>
            {{--{{ Form::submit('<i class="fa fa-floppy-o" aria-hidden="true"> Guardar</i>', array('class' => 'btn btn-info')) }}--}}
            {{Form::close()}}

            <!-- /.box -->
            </div>
        </div>
    </div>
@endsection