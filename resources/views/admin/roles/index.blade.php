@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Cargos dos Colaboradores
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Cargos dos Colaboradores</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row form-inline">
                        <div class="col-lg-12">
                            {{ Form::open(array('url' => 'administration/role', 'class' => 'form-inline')) }}
                            <div class="form-group col-lg-3">
                                <label for="role[name]">Cargo: </label>
                                {{ Form::text('role[display_name]', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="role[name]">Descrição: </label>
                                {{ Form::text('role[description]', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group col-lg-4">
                                <div class="col-lg-6" align="right">
                                    <label for="permissions[]">Permissões:</label>
                                </div>
                                <div class="col-lg-6" align="left">
                                    <select name="permissions[]" class="form-control js-select" style="width: 100%" multiple>
                                        <option value="0" disabled>Seleccione uma opção</option>
                                        @foreach(\App\Permission::all() as $permission)
                                            <option value="{{$permission->id}}">{{$permission->display_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--{{ Form::text('permissions[]', null, array('class' => 'form-control')) }}--}}
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
                                    <th>Cargo</th>
                                    <th>Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->display_name}}</td>
                                        <td>
                                            {{ Form::open(array('url' => 'administration/role/'.$role->id ,'method' => 'DELETE')) }}
                                                <a href="{{"role/".$role->id."/edit"}}" class="btn btn-warning"><i class='fa fa-pencil'></i></a>
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            {{ Form::close() }}

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$roles->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection