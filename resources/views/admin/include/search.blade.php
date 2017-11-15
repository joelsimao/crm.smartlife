<div class="row">
    <div class="form-group">
        <div class="col-lg-3">
            <label for="seller_id">Vendedor</label>
            <select name="seller_id" class="form-control" id="seller_id" style="width: 100%">
                <option value="0" disabled selected>Seleccione uma das opções</option>
                @foreach(App\Seller::all() as $seller)
                    <option value="{{$seller->id}}">{{$seller->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-3">
            <label for="manager_id">Gerente</label>
            <select name="manager_id" class="form-control" id="manager_id" style="width: 100%">
                <option value="0" disabled selected>Seleccione uma das opções</option>
                @foreach(App\Manager::all() as $manager)
                    <option value="{{$manager->id}}">{{$manager->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-3">
            <label for="supervisor_code">Supervisor</label>
            <select name="supervisor_code" class="form-control" id="operator_code" style="width: 100%">
                <option value="0" disabled selected>Seleccione uma das opções</option>
                @foreach(App\Supervisor::all() as $supervisor)
                    <option value="{{$supervisor->code}}">{{$supervisor->code ." - ".$supervisor->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-3">
            <label for="operator_code">Operador Tlm.</label>
            <select name="operator_code" class="form-control" id="operator_code" style="width: 100%">
                <option value="0" disabled selected>Seleccione uma das opções</option>
                @foreach(App\Operator::all() as $operator)
                    <option value="{{$operator->code}}">{{$operator->code ." - ".$operator->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-5">
            <label for="start_date">Data Início</label>
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('start_date', isset($ds) && $ds!= '' ? $ds : null, array('class' => 'form-control', 'id' => 'ds')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <label for="start_date">Data Início</label>
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('end_date', isset($de) && $de!= '' ? $de : null, array('class' => 'form-control', 'id' => 'de')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
{{--        <div class="col-lg-3">
            {{ Form::text('search', isset($search) && $search!= '' ? $search : null, array('class' => 'form-control', 'id' => 'search')) }}
        </div>--}}
        <div class="col-lg-1" style="margin-top: 15px; margin-left: 8%;">
            <label></label>
            <button type="button" class="btn btn-info" id="search_btn">Pesquisar</button>
        </div>
    </div>
</div>
