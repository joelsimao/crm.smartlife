@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Cliente MEO
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(array('url' => 'database/meo_client')) }}
                @include('admin.meo_client.create')
                {{ Form::submit('Inserir', array('class' => 'btn btn-info')) }}
                {{Form::close()}}
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection

@section('phrases-content')
    <div class="row" align="center">
        @if(\Request::is('database/*') || \Request::is('database'))
            <h4>"{{\App\Phrase::all()->random(1)->first()->phrase}}"</h4>
        @endif
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $('#meo_client_services').on('click', function () {
            $(this).addClass('active');
            $('#meo_client_info').removeClass('active');
            $('.meo_client_info_form').addClass('hidden');
            $('.meo_client_services_form').removeClass('hidden');
            $('.meo_client_offers_form').removeClass('hidden');
        });

        $('#meo_client_info').on('click', function () {
            $(this).addClass('active');
            $('#meo_client_services').removeClass('active');
            $('.meo_client_services_form').addClass('hidden');
            $('.meo_client_offers_form').addClass('hidden');
            $('.meo_client_info_form').removeClass('hidden');
        });
        $('#add_services').on('click', function(){
            console.log('OK!!!')
            // $('.meo_client_services_form').clone().insertAfter( "#meo_client_services_form" );
            var clone = $('#meo_client_services_form').clone();
            var labels = clone.find('label');
            labels.each(function () {
               $(this).addClass('hidden');
            });
            clone.insertAfter( "#meo_client_services_form" );
        })
    </script>
@endsection
