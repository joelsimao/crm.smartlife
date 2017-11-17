
<div class="row">
    <div class="row @if(Request::getQueryString() != '') hidden @endif" id="enable_search">
        <div class="col-lg-12" align="right">
            <button type="button" class="btn btn-info" id="btn_search_enable" style="margin-right: 10px;"><i class="fa fa-search" aria-hidden="true"></i> Pesquisa</button>
        </div>
    </div>
    <div class="search_section @if(Request::getQueryString() == '') hidden @endif">
        <div class="form-group">
            <div class="col-lg-3">
                <label for="agency_id">Agência</label>
                <select name="agency_id" class="form-control" id="agency_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Agency::all() as $agency)
                        <option value="{{$agency->id}}" @if($agency_id==$agency->id) selected @endif>{{$agency->name." ". $agency->city}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3">
                <label for="seller_id">Vendedor</label>
                <select name="seller_id" class="form-control" id="seller_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Seller::all() as $seller)
                        <option value="{{$seller->id}}" @if($seller_id==$seller->id) selected @endif>{{$seller->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3">
                <label for="manager_id">Gerente</label>
                <select name="manager_id" class="form-control" id="manager_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Manager::all() as $manager)
                        <option value="{{$manager->id}}" @if($manager_id==$manager->id) selected @endif>{{$manager->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3">
                <label for="supervisor_code">Supervisor</label>
                <select name="supervisor_code" class="form-control" id="supervisor_code" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Supervisor::all() as $supervisor)
                        <option value="{{$supervisor->code}}" @if($supervisor_code==$supervisor->code) selected @endif>{{$supervisor->code ." - ".$supervisor->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-3">
                <label for="operator_code">Operador Tlm.</label>
                <select name="operator_code" class="form-control" id="operator_code" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Operator::all() as $operator)
                        <option value="{{$operator->code}}" @if($operator_code==$operator->code) selected @endif>{{$operator->code ." - ".$operator->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4">
                <label for="start_date">Data Início</label>
                <div class="input-group date datepicker" data-provide="datepicker">
                    {{ Form::text('start_date', isset($ds) && $ds!= '' ? $ds : null, array('class' => 'form-control', 'id' => 'ds')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <label for="start_date">Data Fim</label>
                <div class="input-group date datepicker" data-provide="datepicker">
                    {{ Form::text('end_date', isset($de) && $de!= '' ? $de : null, array('class' => 'form-control', 'id' => 'de')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-1" style="margin-top: 35px;">
                <label></label>
                <button type="button" class="btn btn-info" id="search_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-danger" id="clear_btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
