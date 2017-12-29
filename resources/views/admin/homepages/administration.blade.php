@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Administração
@endsection

@section('main-content')
{{--TODO main-page of Administração--}}
{{--TODO main-content of RH main page--}}
<div class="container-fluid spark-screen">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Administração</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                <tr class="info">
                                    <th colspan="5" style="text-align: center">Gestão de Tabelas</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a href="/administration/agencies"><i class='fa fa-building'></i> <span>Agências</span></a><br>
                                            Lojas e Balcões 1970
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="/administration/permission_area"><i class="fa fa-eye" aria-hidden="true"></i> <span> Área de Permissão</span></a><br>
                                                &ensp;&ensp;Áreas de Permissão
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Área de Documentos</span></a><br>
                                            Áreas de Departamentos
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="/administration/roles"><i class="fa fa-bookmark" aria-hidden="true"></i> <span>Cargos</span></a><br>
                                            Cargos dos Colaboradores
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-exclamation" aria-hidden="true"></i> <span>Decisão</span></a><br>
                                            Tipo de Decisão para os Orçamentos
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-industry" aria-hidden="true"></i> <span>Departamentos</span></a><br>
                                            Departamentos da empresa
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-globe" aria-hidden="true"></i> <span>Distritos</span></a><br>
                                            Distritos nacionais
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Emissor</span></a><br>
                                            Emissores de correspondência
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-address-card-o" aria-hidden="true"></i> <span>Estado Civil</span></a><br>
                                            Estados Civis
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-asterisk" aria-hidden="true"></i> <span>Estado de Vouchers</span></a><br>
                                            Estados dos Vouchers
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-info" aria-hidden="true"></i> <span>Estado de Ups</span></a><br>
                                            Estados dos ups
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span>Formas de Pagamento</span></a> / <a><span> Cartão</span></a><br>
                                            Formas de Pagamentos (MB, Dinheiro, Cheque, etc.)
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-money" aria-hidden="true"></i> <span>Tipos de Pagamento</span></a> / <a><span> Cartão</span></a><br>
                                            Tipos de Pagamentos (Sinalização, Parcial, Total, etc.)
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Habilitações</span></a><br>
                                            Habilitações Literárias
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-university" aria-hidden="true"></i> <span>Local de Trabalho</span></a><br>
                                            Locais de trabalho dos Colaboradores
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-file-o" aria-hidden="true"></i> <span>Tipos de contrato</span></a><br>
                                            Dos Colaboradores
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Tipos de Viagem</span></a><br>
                                            Tipos de Viagem
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Tipos de Mensagem</span></a><br>
                                            Tipos dos Documentos
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Tipos de Viagem</span></a><br>
                                            Tipos de Mensagens
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-bars" aria-hidden="true"></i> <span>Menus RH</span></a>
                                            / <a><span> Comercial</span></a> / <a><span> Club1970</span></a> / <a><span> Contabilidade</span></a>
                                            <br>
                                            Menus de atribuição aos Utilizadores
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-user-o" aria-hidden="true"></i> <span>Recepcionistas</span></a><br>
                                            Acessos e Permissões
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-binoculars" aria-hidden="true"></i> <span>Campanhas</span></a><br>
                                            Campanhas Optimus Negócios
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-area-chart" aria-hidden="true"></i> <span>Optimus Familias Negócios</span></a><br>
                                            Famílias de pagamentos optimus
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-ticket" aria-hidden="true"></i> <span>Valor de Cartão</span></a><br>
                                            Valor do cartão Club 1970
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-eye" aria-hidden="true"></i> <span>Área de Permissões Club</span></a><br>
                                            Valor do cartão Club 1970
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-quote-right" aria-hidden="true"></i> <span>Frases</span></a><br>
                                            Frases Motivacionais
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Imagem Inicial</span></a><br>
                                            Imagem de Fundo da página de Login
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="/administration/jobs"><i class="fa fa-briefcase" aria-hidden="true"></i> <span>Profissões</span></a><br>
                                            Clientes/Ups
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <span>Estados Injuções</span></a> / <a><span> Execuções</span></a><br>
                                            Estados(Injuções/Execuções)
                                        </td>
                                        <td style="text-align: center;">
                                            <a><i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Campanhas Vouchers</span></a><br>
                                            Campanhas dos Vouchers
                                        </td>
                                    </tr>
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