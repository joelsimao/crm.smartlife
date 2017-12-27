@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Editar Cliente - {{$meo_client->name}}
@endsection
@section('contentheader_title')
    Editar Cliente - {{$meo_client->name}}
    {{--Sócio Nº {{$client->id ." - ".$client->first_holder_name}}--}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            {{ Form::open(array('url' => 'database/meo_client/'.$meo_client->id, 'method' => 'PUT')) }}
            @include('admin.meo_client.create', array('isEdit' => true))
            <button class="btn btn-info"><i class="fa fa-floppy-o fa-2x" aria-hidden="true" ></i><br>Guardar</button>
            {{--{{ Form::submit('<i class="fa fa-floppy-o" aria-hidden="true"> Guardar</i>', array('class' => 'btn btn-info')) }}--}}
            {{Form::close()}}

            <!-- /.box -->

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        var id = 0;
        $(document).ready(function () {
            var services_forms = $('.meo_client_services_form');
            services_forms.each(function (index) {
                id=id+1;
                if(index!=0){
                   $(this).attr('id', 'meo_client_services_form'+id);
                }
            })
        });
        
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
            labels.each(function () {
                $(this).addClass('hidden');
            });
            var after = id - 1;
            console.log(after);
            if(after==0)
                clone.insertAfter( "#meo_client_services_form");
            else
                clone.insertAfter( "#meo_client_services_form"+after);
        });
    </script>
@endsection

@section('phrases-content')
    @if(\Request::is('club/*') || \Request::is('club'))
        <div class="nav bottom-navbar" align="center">
            <h4>"{{\App\Phrase::all()->random(1)->first()->phrase}}"</h4>
        </div>
    @endif
@endsection