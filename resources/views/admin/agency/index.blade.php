@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Agências
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Agências</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{ Form::open(array('url' => '/agency', 'class' => 'form-inline')) }}
                            <div class="form-group col-lg-4">
                                <label for="agency[name]">Nome da Agência:</label>
                                {{ Form::text('agency[name]', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="agency[city]">Localidade:</label>
                                {{ Form::text('agency[city]', null, array('class' => 'form-control')) }}
                            </div>
                            {{ Form::submit('Inserir' , array('class' => 'btn btn-info'))}}
                            {{Form::close()}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12" align="center">
                            <table class="table">
                                <thead>
                                <tr class="info">
                                    <th>ID</th>
                                    <th>Nome da Agência</th>
                                    <th>Localidade</th>
                                    <th>Activo</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agencies as $agency)
                                    <tr>
                                        <td>{{$agency->id}}</td>
                                        <td>{{$agency->name}}</td>
                                        <td>{{$agency->city}}</td>
                                        <td><button class="btn @if($agency->active) btn-success @else btn-danger @endif @if($agency->active) activate @else desactivate @endif" id="{{$agency->id}}">
                                                <i class="fa @if($agency->active) fa-check @else fa-times @endif" aria-hidden="true"></i>
                                            </button></td>
                                        <td>

                                            {{ Form::open(array('url' => 'agency/'.$agency->id ,'method' => 'DELETE')) }}
                                                <button type="button" class="btn btn-warning edit" id="{{$agency->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            {{ Form::close() }}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$agencies->links()}}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $('.edit').on('click', function () {
            var id = $(this).attr('id');
            var row = $(this).closest('tr').find('td');
            $(this).toggleClass('btn-warning btn-info').toggleClass('edit check');
            $('i', this).toggleClass('fa-pencil fa-save');
            if($(this).hasClass('edit')){
                store = $('#store').val();
                city = $('#city').val();
                $.ajax({
                    method:'GET',
                    url: "agency/"+id,
                    data: { name: store, city: city},
                    dataType: 'JSON',
                    contentType: 'application/json; charset=utf-8',
                    beforeSend: function(request) {
                        return request.setRequestHeader('X-CSRF-Token', $("meta[name='token']").attr('content'));
                    },
                    success: function (response) {
                        if(response.status == "complete"){
                            console.log(response);
                            row[1].innerHTML = response.name;
                            row[2].innerHTML = response.city;
                        }
                    },
                    error: function (data) {
                      console.log("Error!!")
                    },
                });
            }

            if($(this).hasClass('check')){
                var store = row[1].innerText;
                var city = row[2].innerText;
                row[1].innerHTML = "<input type=text value='" + store + "' id='store'>";
                row[2].innerHTML = "<input type=text value='" + city + "' id='city'>";
            }
        });

        $('.activate').on('click', function () {
            var id = $(this).attr('id');
            $(this).toggleClass('btn-success btn-danger').toggleClass('activate desactivate');
            $('i', this).toggleClass('fa-check fa-times');
            $.ajax({
                method:'GET',
                url: "agency/"+id,
                data: { active: false},
                dataType: 'JSON',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
                    if(response.status == "complete"){
                        flash_message("Agência desativada Com Sucesso!!");

                    }
                },
                error: function (data) {
                    console.log("Error!!")
                },
            });
        });
        
        $('.desactivate').on('click', function () {
            var id = $(this).attr('id');
            $(this).toggleClass('btn-danger btn-success').toggleClass('desactivate activate');
            $('i', this).toggleClass('fa-times fa-check');
            $.ajax({
                method:'GET',
                url: "agency/"+id,
                data: { active: true},
                dataType: 'JSON',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
                    if(response.status == "complete"){
                        flash_message("Agência ativada Com Sucesso!!");

                    }
                },
                error: function (data) {
                    console.log("Error!!")
                },
            });
        });
    </script>
@endsection