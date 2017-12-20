@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Colaborador
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => 'rh/collaborator')) }}
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
        $('#role_select').on('change', function(){
            if($(this).val() == 5 || $(this).val() == 9){
                $('#coordenator').removeClass('hidden');
                if(!$('#manager').hasClass('hidden')){
                    $('#manager').addClass('hidden');
                }
            } else if($(this).val() == 7 || $(this).val() == 8){
                $('#manager').removeClass('hidden');
                if(!$('#coordenator').hasClass('hidden')){
                    $('#coordenator').addClass('hidden');
                }
            } else {
                if(!$('#coordenator').hasClass('hidden')){
                    $('#coordenator').addClass('hidden');
                }
                if(!$('#manager').hasClass('hidden')){
                    $('#manager').addClass('hidden');
                }
            }
        });
    </script>
@endsection