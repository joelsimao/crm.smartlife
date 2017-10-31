@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Cliente
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => '/client')) }}
                @include('admin.client._form_client_info')
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
        $('#marital_status').on('change', function () {
            var marital_status_id = $('#marital_status :selected').val();
            if( marital_status_id != 0 && marital_status_id != 1){
                $('#spouse_name').removeClass('hidden');
            } else {
                $('#spouse_name').addClass('hidden');
            }
        });

    </script>
@endsection
