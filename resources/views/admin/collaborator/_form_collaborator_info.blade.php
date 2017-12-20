<div class="row collab_info_form">
    <div class="form-group col-lg-6">
{{--        <div class="form-group col-lg-8">
            <label for="collaborator[code]">Código <b>*</b>:</label>
            {{ Form::text('collaborator[code]', null, array('class' => 'form-control')) }}
        </div>--}}
        <div class="form-group col-lg-12">
            <label for="collaborator[name]">Nome <b>*</b>:</label>
            {{ Form::text('name', null, array('class' => 'form-control'))}}
        </div>
        <div class="form-group col-lg-12">
            <label for="collaborator[address]">Morada <b>*</b>:</label>
            {{ Form::text('collaborator[address]', null, array('class' => 'form-control'))}}
        </div>
        <div class="form-group col-lg-12">
            <label for="collaborator[city]">Localidade <b>*</b>:</label>
            {{ Form::text('collaborator[city]', null, array('class' => 'form-control'))}}
        </div>
        <div class="form-group col-lg-12">
            <label for="collaborator[email]">Email:</label>
            {{ Form::text('email', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-lg-12">
            <label for="collaborator[nib]">NIB:</label>
            {{ Form::text('collaborator[nib]', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-lg-12">
            <label for="collaborator[nif]">Nº de Contribuite:</label>
            {{ Form::text('collaborator[nif]', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-lg-8">
            <label for="client[emmission_date]">Data de Emissão BI:</label>
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('collaborator[emmission_date]', null, array('class' => 'form-control')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-8">
            <label for="collaborator[gender]">Género <b>*</b>:</label>
            <select name="collaborator[gender]" class="form-control">
                <option value="masc">Masculino</option>
                <option value="fem">Feminino</option>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <label for="collaborator[salary]">Vencimento:</label>
            {{ Form::text('collaborator[salary]', null, array('class' => 'form-control'))}}
        </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Validar:</label>
            {{ Form::checkbox('validate', true, null, ['class' => 'form-check-input']) }}
        </div>
    </div>

    <div class="form-group col-lg-6">
        <div class="form-group col-lg-8">
            <label for="client[birth_date]">Data de Nascimento <b>*</b>:</label>
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('collaborator[date_of_birth]', null, array('class' => 'form-control')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label for="collaborator[zipcode]">Código Postal<b>*</b>:</label>
            {{ Form::text('collaborator[zipcode]', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-lg-8">
            <label for="collaborator[district_id]">Distrito <b>*</b>:</label>
            <select name="collaborator[district_id]" class="form-control">
                <option value="0">Seleccione um distrito</option>
                @foreach(\App\District::all() as $district)
                    <option value="{{$district->id}}"
                            @if(isset($collaborator) && $district->id == $collaborator->district_id) selected @endif>{{$district->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-6">
            <label for="collaborator[phone_number]">Nº de Telefone:</label>
            {{ Form::text('collaborator[phone_number]', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-lg-6">
            <label for="collaborator[mobile_phone_number]">Nº de Telemóvel:</label>
            {{ Form::text('collaborator[mobile_phone_number]', null, array('class' => 'form-control ')) }}
        </div>
        <div class="form-group col-lg-8">
            <label for="colaborator[marital_status]">Estado Civil <b>*</b>:</label>
            <select name="collaborator[marital_status_id]" class="form-control" id="marital_status" style="width: 100%">
                <option value="0" disabled selected>Seleccione uma das opções</option>
                @foreach(App\MaritalStatus::all() as $marital_status)
                    <option value="{{$marital_status->id}}"
                            @if(isset($collaborator) && $marital_status->id == $collaborator->marital_status_id) selected @endif>{{$marital_status->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-8">
            <label for="collaborator[niss]">Nº da Seg. Social:</label>
            {{ Form::text('collaborator[niss]',null, array('class' => 'form-control ')) }}
        </div>
        <div class="form-group col-lg-8">
            <label for="collaborator[bi_number]">BI/CC:</label>
            {{ Form::text('collaborator[bi]',null, array('class' => 'form-control ')) }}
        </div>
        <div class="form-group col-lg-4">
            <label for="collaborator[bi_code]">Dig. Contr.:</label>
            {{ Form::text('collaborator[control_digit]',null, array('class' => 'form-control ')) }}
        </div>
        <div class="form-group col-lg-8">
            <label for="collaborator[archive]">Arquivo:</label>
            {{ Form::text('collaborator[archive]',null, array('class' => 'form-control ')) }}
        </div>
        <div class="form-group col-lg-8">
            <label for="collaborator[qualification_id]">Habilitações:</label>
            <select name="collaborator[qualification_id]" class="form-control">
                <option value="0">Seleccione uma das opções</option>
                @foreach(\App\Qualification::all() as $qualification)
                    <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
