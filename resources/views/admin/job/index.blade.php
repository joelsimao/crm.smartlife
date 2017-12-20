@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Profissões
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Profissões</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{ Form::open(array('url' => '/job', 'class' => 'form-inline')) }}
                            <div class="form-group col-lg-4">
                                <label for="job[name]">Nome da Profissão:</label>
                                {{ Form::text('job[name]', null, array('class' => 'form-control')) }}
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
                                    <th>Nome da Profissão</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->id}}</td>
                                        <td>{{$job->name}}</td>
                                        <td>
                                            {{ Form::open(array('url' => 'job/'.$job->id ,'method' => 'DELETE')) }}
                                            <button type="button" class="btn btn-warning edit" id="{{$job->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            {{ Form::close() }}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$jobs->links()}}
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
                name = $('#name').val();
                $.ajax({
                    method:'GET',
                    url: "job/"+id,
                    data: { name: name},
                    dataType: 'JSON',
                    contentType: 'application/json; charset=utf-8',
                    beforeSend: function(request) {
                        return request.setRequestHeader('X-CSRF-Token', $("meta[name='token']").attr('content'));
                    },
                    success: function (response) {
                        if(response.status == "complete"){
                            console.log(response);
                            row[1].innerHTML = response.name;
                            flash_message("Profissão Atualizada Com Sucesso!!");
                        }
                    },
                    error: function (data) {
                        console.log("Error!!")
                    },
                });
            }

            if($(this).hasClass('check')){
                var name = row[1].innerText;
                row[1].innerHTML = "<input type=text value='" + name + "' id='name'>";
            }
        });

        $('.activate').on('click', function () {
            var id = $(this).attr('id');
            $(this).toggleClass('btn-success btn-danger').toggleClass('activate desactivate');
            $('i', this).toggleClass('fa-check fa-times');
            $.ajax({
                method:'GET',
                url: "job/"+id,
                data: { active: false},
                dataType: 'JSON',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
                    if(response.status == "complete"){
                        flash_message("Profissão desativada Com Sucesso!!");

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
                url: "job/"+id,
                data: { active: true},
                dataType: 'JSON',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
                    if(response.status == "complete"){
                        flash_message("Profissão ativada Com Sucesso!!");

                    }
                },
                error: function (data) {
                    console.log("Error!!")
                },
            });
        });
    </script>
@endsection