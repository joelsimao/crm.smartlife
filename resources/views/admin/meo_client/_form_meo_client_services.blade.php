<div class="row hidden meo_client_services_form" id="meo_client_services_form">
    <div class="form-group col-lg-4" id="service-names">
        <label for="meo_client[services]">Serviço <b>*</b>: </label>
        {{ Form::text('names[]', null, array('class' => 'form-control', 'id' => 'service-namet')) }}
        {{--<select name="services[]" class="form-control" style="width: 100%" id="service-name">--}}
            {{--<option value="0">Seleccione uma opção</option>--}}
        {{--</select><br>--}}
    </div>
    <div class="form-group col-lg-4" id="service-descriptions">
        <label for="meo_client[descriptions]">Descrição <b>*</b>: </label>
        {{ Form::textarea('descriptions[]', null, array('class' => 'form-control', 'size' => '5x5', 'id' => 'service-description')) }}
    </div>
    <div class="form-group col-lg-4" id="service-payments">
        <label for="meo_client[monthly_payment]">Mensalidade: </label>
        {{ Form::text('monthly_payments[]', null, array('class' => 'form-control', 'id' => 'service-payment')) }}
    </div>
</div>
<div class="row meo_client_offers_form hidden">
    <div class="form-group col-lg-4">
        <button type="button" class="btn btn-info" id="add_services">+ Serviços</button>
    </div>
    <div class="form-group col-lg-4" align="right">
        <label for="meo_client[offer]">Oferta: </label>

        {{--{{ Form::text('meo_client[offer]', null, array('class' => 'form-control')) }}--}}
    </div>
    <div class="form-group col-lg-4">
        <select name="offer" class="form-control">
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
    </div>
</div>