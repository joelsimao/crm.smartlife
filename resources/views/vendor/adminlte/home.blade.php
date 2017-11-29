@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">

			{{--@if(App::environment()=="local")--}}
				{{--<div class="col-md-4 col-md-offset-2">--}}
						{{--<a href="/client/create"><i class='fa fa-plus-square fa-5x' aria-hidden="true" style="vertical-align: middle;"></i></a>--}}
						{{--<span> Adicionar Cliente</span>--}}
				{{--</div>--}}
				{{--<div class="col-md-4 col-md-offset-2">--}}
					{{--<a href="client"><i class='fa fa-search fa-5x' aria-hidden="true" style="vertical-align: middle;"></i></a>--}}
					{{--<span> Pesquisar Cliente</span>--}}
				{{--</div>--}}
			{{--@endif--}}
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
							<div class="box-tools pull-right">
								{{--<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">--}}
									{{--<i class="fa fa-minus"></i></button>--}}
							</div>
						</div>
						<div class="box-body">
							{{--{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!--}}
							<div class="row">
								<div class="col-md-4 col-md-offset-2" align="center">
									<label>Últimos acessos</label>
									<table class="table">
										<thead>
										<tr class="info">
											<th style="text-align:center">{{Auth::user()->name}}</th>
										</tr>

										</thead>
										<tbody>
										<tr style="background-color: #FFFFFF">
											<td>Registo de acesso</td>
										</tr>

										</tbody>
									</table>
									@php
										$date_update = new \Carbon\Carbon(Auth::user()->updated_at);
                                        $diff = $date_update->diffInDays(\Carbon\Carbon::now());
									@endphp
									<div align="justify">
										<span><b>Última atualização</b> {{$date_update->format("d-m-Y")." (".$diff." dias)"}}</span>
									</div>
								</div>
								<div class="col-md-4" align="center">
									<label>Últimas Mensagens</label>
									<table class="table">
										<thead>
										<tr class="info">
											<th>Colaborador</th>
											<th>Data</th>
											<th>Assunto</th>
											<th>Sócio</th>
										</tr>

										</thead>
										<tbody>
										<tr style="background-color: #FFFFFF">
											<td>C1</td>
											<td>Data</td>
											<td>Subject</td>
											<td><a href="#">Nome de Sócio</a></td>
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




				<!-- Default box -->
            {{--	<div class="box">
    {{--			<div class="box-header with-border">
                        <h3 class="box-title">Home</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
                    </div>
                    <!-- /.box-body -->
                </div>--}}
				<!-- /.box -->

		</div>
	</div>
@endsection
