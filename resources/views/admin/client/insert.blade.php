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
            if( marital_status_id != 0 && marital_status_id != 1 && marital_status_id != 4){
                $('#spouse_name').removeClass('hidden');
            } else {
                $('#spouse_name').addClass('hidden');
            }
        });

        $('#date_of_birth').on('change', function () {
            var date_of_birth = $(this).val();
                $.ajax({
                    url: "/age",
                    data: { date_of_birth: date_of_birth} ,
                    success: function (response) {
                        $('#age').val(response.age);
                    },
                });
        });

        $('#operator_code').on('change', function () {
            var operator_id = $(this).val();
            $.ajax({
                url: "/get_supervisor",
                data: { operator_id: operator_id} ,
                success: function (response) {
                    console.log(response);
                    $('#supervisor_code').append($('<option>', {
                        value: response.code,
                        text: response.code + " - " + response.name,
                        selected: true,
                    }));
                    /*$('#age').val(response.age);*/
                },
            });
        });

        $('#addHolder').on('click', function () {
            $(this).toggleClass("btn-danger").toggleClass("btn-info");
            var c = $(this).attr('class');
            $(this).find('i').toggleClass('fa fa-minus-square-o').toggleClass('fa fa-plus-square-o');
            if(c.indexOf("btn-danger") != -1){
                $('.1ndHolder_form').removeClass('col-lg-12').addClass('col-lg-6');
                $('.2ndHolder_form').removeClass('hidden');
                $('.2ndHolder_title').removeClass('hidden');
            } else {
                $('.1ndHolder_form').addClass('col-lg-12').removeClass('col-lg-6');
                $('.2ndHolder_form').addClass('hidden');
                $('.2ndHolder_title').addClass('hidden');
            }
        });
    </script>
@endsection
