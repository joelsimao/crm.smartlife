@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Área de Permissões
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Área de Permissões</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row form-inline">
                        <div class="col-lg-12">
                            {{ Form::open(array('url' => 'administration/permission', 'class' => 'form-inline')) }}
                            <div class="form-group col-lg-3">
                                <label for="permission[name]">Permissão: </label>
                                {{ Form::text('permission[display_name]', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="permission[name]">Descrição: </label>
                                {{ Form::text('permission[description]', null, array('class' => 'form-control')) }}
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
                                    <th>Permissão</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{$permission->id}}</td>
                                        <td>{{$permission->display_name}}</td>
                                        <td>
                                            {{ Form::open(array('url' => 'administration/permission/'.$permission->id ,'method' => 'DELETE')) }}
                                                <a href="{{"permission/".$permission->id."/edit"}}" class="btn btn-warning"><i class='fa fa-pencil'></i></a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            {{ Form::close() }}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$permissions->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection