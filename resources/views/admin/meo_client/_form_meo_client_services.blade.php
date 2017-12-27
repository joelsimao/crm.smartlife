
    @if(!$isEdit)
        <div class="row hidden meo_client_services_form" id="meo_client_services_form">
            <div class="form-group col-lg-3" id="service-names">
                <label for="meo_client[services]">Serviço <b>*</b>: </label>
                {{ Form::text('names[]', null, array('class' => 'form-control', 'id' => 'service-name')) }}
            </div>
            <div class="form-group col-lg-3" id="service-descriptions">
                <label for="meo_client[descriptions]">Descrição <b>*</b>: </label>
                {{ Form::textarea('descriptions[]', null, array('class' => 'form-control', 'size' => '1x1', 'id' => 'service-description')) }}
            </div>
            <div class="form-group col-lg-3" id="service-payments">
                <label for="meo_client[monthly_payment]">Mensalidade: </label>
                {{ Form::text('monthly_payments[]', null, array('class' => 'form-control', 'id' => 'service-payment')) }}
            </div>
            <div class="form-group col-lg-3">
                <label for="meo_client[offer]">Oferta: </label>
                {{ Form::textarea('offers[]', null,  array('class' => 'form-control', 'size' => '1x1', 'id' => 'service-description')) }}
            </div>
        </div>
    @else
        @foreach($services as $key=>$service)
            <div class="row hidden meo_client_services_form" id="meo_client_services_form">
                <div class="form-group col-lg-3" id="service-names">
                    @if($key == 0)<label for="meo_client[services]">Serviço <b>*</b>: </label>@endif
                    {{ Form::text('names[]', $service->name, array('class' => 'form-control', 'id' => 'service-name')) }}
                </div>
                <div class="form-group col-lg-3" id="service-descriptions">
                    @if($key == 0) <label for="meo_client[descriptions]">Descrição <b>*</b>: </label>@endif
                    {{ Form::textarea('descriptions[]', $service->description, array('class' => 'form-control', 'size' => '1x1', 'id' => 'service-description')) }}
                </div>
                <div class="form-group col-lg-3" id="service-payments">
                    @if($key == 0) <label for="meo_client[monthly_payment]">Mensalidade: </label> @endif
                    {{ Form::text('monthly_payments[]', $service->monthly_payment."€", array('class' => 'form-control', 'id' => 'service-payment')) }}
                </div>
                <div class="form-group col-lg-3">
                    @if($key == 0) <label for="meo_client[offer]">Oferta: </label>@endif
                    {{ Form::textarea('offers[]', $service->offer,  array('class' => 'form-control', 'size' => '1x1', 'id' => 'service-description')) }}
                </div>
            </div>
        @endforeach
    @endif

<div class="row meo_client_offers_form hidden">
    <div class="form-group col-lg-4">
        <button type="button" class="btn btn-info" id="add_services">+ Serviços</button>
    </div>
</div>