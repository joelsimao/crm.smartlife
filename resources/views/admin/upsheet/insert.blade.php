@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir U
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => 'database/upsheet')) }}
                @include('admin.upsheet._form_client_info')
                {{ Form::submit('Inserir') }}
            {{Form::close()}}

        <!-- /.box -->

        </div>
    </div>
    </div>
@endsection

@section('phrases-content')
    @if(\Request::is('database/*') || \Request::is('database'))
        <h4>"{{\App\Phrase::all()->random(1)->first()->phrase}}"</h4>
    @endif
@endsection

@section('scripts')
@parent
    <script>
        $('#marital_status').on('change', function () {
            var marital_status_id = $('#marital_status :selected').val();
            if( marital_status_id == 2 || marital_status_id == 3){
                $('#spouse_name').removeClass('hidden');
            } else {
                $('#spouse_name').addClass('hidden');
            }
        });

        $('#close').on('change', function () {
            var close_id = $('#close :selected').val();
            if( close_id != 1){
                $('#justify_bar').removeClass('hidden');
            } else {
                $('#justify_bar').addClass('hidden');
            }
        });

        $('#first_holder_date_of_birth').on('change', function () {
            var date_of_birth = $(this).val();
                $.ajax({
                    url: "/age",
                    data: { date_of_birth: date_of_birth} ,
                    success: function (response) {
                        $('#first_holder_age').val(response.age);
                    },
                });
        });


        $('#second_holder_date_of_birth').on('change', function () {
            var date_of_birth = $(this).val();
            $.ajax({
                url: "/age",
                data: { date_of_birth: date_of_birth},
                success: function (response) {
                    $('#second_holder_age').val(response.age);
                },
            });
        });

        $('#first_holder_age').on('change', function () {
            var age = $(this).val();
            var date = new Date();
            var year = date.getFullYear();
            var year_of_birth = year - age;
            $('#first_holder_date_of_birth').val(year_of_birth + "-01-01");
        });

        $('#second_holder_age').on('change', function () {
            var age = $(this).val();
            var date = new Date();
            var year = date.getFullYear();
            var year_of_birth = year - age;
            $('#second_holder_date_of_birth').val(year_of_birth + "-01-01");
        });

        $('#operator_code').on('change', function () {
            var operator_id = $(this).val();
            $.ajax({
                url: "/get_supervisor",
                data: { operator_id: operator_id} ,
                success: function (response) {
                    console.log(response);
                    $('#supervisor_code').append($('<option>', {
                        value: response.id,
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

        $('#leave_hour').on('dp.change', function () {
            var leave_hour = $('#leave_hour_input').val();
            var entry_hour = $('#entry_hour').val();
            $.ajax({
                url: "/tour_calculate",
                data: { entry_hour: entry_hour, leave_hour: leave_hour},
                success: function (response) {
                    $('#h_tour').val(response.tour);
                },
            });
        });
    </script>
@endsection
