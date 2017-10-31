<div class="row">
    <div class="col-lg-4">
        {{ Form::text('start_date', isset($ds) && $ds!= '' ? $ds : null, array('class' => 'form-control col-lg-4', 'id' => 'ds')) }}
    </div>
    <div class="col-lg-4">
        {{ Form::text('end_date', isset($de) && $de!= '' ? $de : null, array('class' => 'form-control col-lg-4', 'id' => 'de')) }}
    </div>
    <div class="col-lg-3">
        {{ Form::text('search', isset($search) && $search!= '' ? $search : null, array('class' => 'form-control col-lg-4', 'id' => 'search')) }}
    </div>
    <div class="col-lg-1">
        <button type="button" id="search_btn">Pesquisar</button>
    </div>
</div>
