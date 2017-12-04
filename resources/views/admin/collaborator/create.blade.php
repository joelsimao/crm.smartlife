@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Colaborador
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => '/client')) }}
            @include('admin.collaborator.insert')
            {{ Form::submit('Inserir') }}
            {{Form::close()}}

            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $('#collab_team').on('click', function () {
            $(this).addClass('active');
            $('#collab_info').removeClass('active');
            $('.collab_info_form').addClass('hidden');
            $('.collab_team_form').removeClass('hidden');
        });
        $('#collab_info').on('click', function () {
            $(this).addClass('active');
            $('#collab_team').removeClass('active');
            $('.collab_team_form').addClass('hidden');
            $('.collab_info_form').removeClass('hidden');
        });
    </script>
@endsection