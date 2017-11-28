@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Club1970
@endsection

@section('main-content')
    <div class="col-md-4 col-md-offset-2">
        <a href="/client/create"><i class='fa fa-plus-square fa-5x' aria-hidden="true" style="vertical-align: middle;"></i></a>
        {{--<span> Adicionar Cliente</span>--}}
    </div>
    <div class="col-md-4 col-md-offset-2">
        <a href="client"><i class='fa fa-search fa-5x' aria-hidden="true" style="vertical-align: middle;"></i></a>
        {{--<span> Pesquisar Cliente</span>--}}
    </div>
@endsection