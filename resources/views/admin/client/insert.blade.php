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

        $('#date_of_birth').on('change', function () {
            var date_of_birth = $(this).val();
/*            var date = date_of_birth.split("-");
            var year_of_birth = date[0];
            var month_of_birth = date[1];
            var day_of_birth = date[2];
            var now_date = new Date();
            var actual_day = now_date.getDate();
            var actual_month = now_date.getMonth()+1;
            var actual_year = now_date.getFullYear();
            var age = actual_year - year_of_birth;
            if(actual_month < month_of_birth || year_of_birth < year){
                age--;
            }*/
                $.ajax({
                    url: "/age",
                    data: { date_of_birth: date_of_birth} ,
                    success: function (response) {
                        $('#age').val(response.age);
                    },
                });



        });


    </script>
@endsection
