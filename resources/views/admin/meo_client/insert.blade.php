@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inserir Cliente MEO
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{ Form::open(array('url' => 'database/meo_client')) }}
                @include('admin.meo_client.create', array('isEdit' => false))
                <button class="btn btn-info"><i class="fa fa-floppy-o fa-2x" aria-hidden="true" ></i><br>Inserir</button>
                {{--{{ Form::submit('Inserir', array('class' => 'btn btn-info')) }}--}}
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
        var id = 0;
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
            id = id + 1;
            var clone = $('#meo_client_services_form').clone();
            clone.attr('id', 'meo_client_services_form'+id);
            clone.find('input').val('');
            clone.find('textarea').val('');
            var labels = clone.find('label');
            labels.each(function (index) {
                if(index!=3)
                    $(this).addClass('hidden');
            });
            var after = id - 1;
            console.log(after);
            if(after==0)
                clone.insertAfter( "#meo_client_services_form");
            else
                clone.insertAfter( "#meo_client_services_form"+after);
            $('#del_services').removeClass('hidden');
        });
        $('#del_services').on('click', function(){
            $('#meo_client_services_form'+id).remove();
            id=id-1;
        });
    </script>
@endsection
