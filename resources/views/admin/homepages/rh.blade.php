@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Recursos Humanos
@endsection

{{--@section('contentheader_title')--}}
    {{--Recursos Humanos--}}
{{--@endsection--}}

@section('main-content')
    {{--TODO main-content of RH main page--}}
    <div class="container-fluid spark-screen">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recuros Humanos</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{--{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!--}}
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Estatísticas</label>
                                <table class="table table-responsive">
                                    <thead>
                                    <tr class="info">
                                        <th colspan="2" style="text-align:center">Colaboradores</th>
                                        <th colspan="2" style="text-align:center">Contratos</th>
                                    </tr>
                                    <tr class="info">
                                        <th style="text-align:center">Ativos</th>
                                        <th style="text-align:center">Inativos</th>
                                        <th style="text-align:center">Ativos</th>
                                        <th style="text-align:center"><= 30 dias</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr style="background-color: #FFFFFF">
                                        <td style="text-align:center">673</td>
                                        <td style="text-align:center">545</td>
                                        <td style="text-align:center">216</td>
                                        <td style="text-align:center">216</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="info">
                                        <th colspan="4"> Cargos de Colaroradores</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Administrativo</td>
                                        <td>x</td>
                                        <td>Comercial</td>
                                        <td>x</td>
                                    </tr>
                                    <tr>
                                        <td>Coordenador</td>
                                        <td>x</td>
                                        <td>Estafeta</td>
                                        <td>x</td>
                                    </tr>
                                    <tr>
                                        <td>Gerente</td>
                                        <td>x</td>
                                        <td>Operador</td>
                                        <td>x</td>
                                    </tr>
                                    <tr>
                                        <td>Recepcionista</td>
                                        <td>x</td>
                                        <td>Supervisor</td>
                                        <td>x</td>
                                    </tr>
                                    <tr>
                                        <td>Vendedor</td>
                                        <td>x</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="info">
                                        <th colspan="4"> Local de Trabalho de Colaboradores</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Aveiro</td>
                                        <td>x</td>
                                        <td>Boavista - BomSucesso</td>
                                        <td>x</td>
                                    </tr>
                                    <tr>
                                        <td>Boavista - DonaEstefânia</td>
                                        <td>x</td>
                                        <td>Porto - Oceanus</td>
                                        <td>x</td>
                                    </tr>
                                    <tr>
                                        <td>Porto - Sede</td>
                                        <td>x</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                {{--TODO change n and x with database results--}}
                                <label>n Contratos a terminar</label>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="info">
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Início</th>
                                        <th>Fim</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>

@endsection