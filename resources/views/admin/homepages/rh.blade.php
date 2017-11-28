@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Recursos Humanos
@endsection

@section('contentheader_title')
    Recursos Humanos
@endsection

@section('main-content')
    {{--TODO main-content of RH main page--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
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
                    <tr>
                        <td style="text-align:center">673</td>
                        <td style="text-align:center">545</td>
                        <td style="text-align:center">216</td>
                        <td style="text-align:center">216</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr style="background-color: #0c0c0c">


@endsection