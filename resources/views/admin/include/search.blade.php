<div class="row">
    <div class="form-group">
        <div class="col-lg-4">
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('start_date', isset($ds) && $ds!= '' ? $ds : null, array('class' => 'form-control', 'id' => 'ds')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('end_date', isset($de) && $de!= '' ? $de : null, array('class' => 'form-control', 'id' => 'de')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            {{ Form::text('search', isset($search) && $search!= '' ? $search : null, array('class' => 'form-control', 'id' => 'search')) }}
        </div>
        <div class="col-lg-1">
            <button type="button" class="btn btn-info" id="search_btn">Pesquisar</button>
        </div>
    </div>
</div>
