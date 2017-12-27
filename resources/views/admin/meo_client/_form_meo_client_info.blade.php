<div class="row meo_client_info_form">
    <div class="form-group col-lg-6">
        <label for="meo_client[name]">Nome Completo <b>*</b>: </label>
        {{ Form::text('meo_client[name]', isset($meo_client) ? $meo_client->name : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-6">
        <label for="meo_client[nif]">NIF <b>*</b>: </label>
        {{ Form::text('meo_client[nif]', isset($meo_client) ? $meo_client->nif : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-6">
        <label for="meo_client[address]">Morada : </label>
        {{ Form::text('meo_client[address]', isset($meo_client) ? $meo_client->address : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-6">
        <label for="meo_client[zipcode]">Código Postal : </label>
        {{ Form::text('meo_client[zipcode]', isset($meo_client) ? $meo_client->zipcode : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-6">
        <label for="meo_client[city]">Localidade <b>*</b>: </label>
        {{ Form::text('meo_client[city]', isset($meo_client) ? $meo_client->city : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-3">
        <label for="meo_client[phone]">Nº Telef. : </label>
        {{ Form::text('meo_client[phone]', isset($meo_client) ? $meo_client->phone : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-3">
        <label for="meo_client[mobile_phone]">Nº Telem. : </label>
        {{ Form::text('meo_client[mobile_phone]', isset($meo_client) ? $meo_client->mobile_phone : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group col-lg-6">
        <label for="meo_client[manager_name]">Nome do Gestor <b>*</b>: </label>
        {{ Form::text('meo_client[manager_name]', isset($meo_client) ? $meo_client->manager_name : null, array('class' => 'form-control')) }}
    </div>
    {{--<div class="form-group col-lg-6">--}}
        {{--<label for="meo_client[manager_contact]"> Contacto Gestor <b>*</b>: </label>--}}
        {{--{{ Form::text('meo_client[manager_contact]', null, array('class' => 'form-control')) }}--}}
    {{--</div>--}}
</div>