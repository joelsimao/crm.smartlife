<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@if( isset($isEdit)) Editar Cliente @else Inserir Cliente @endif</h3>
    </div>
    <div class="box-body">
        @if(isset($errors) && $errors != null)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Erro!</strong> {{$error}}
                </div>
            @endforeach
        @endif
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="upsheet[visit_date]">Data de Visita <b>*</b>:</label>
                <div class="input-group date datepicker" data-provide="datepicker">
{{--                    @if(isset($errors) && $errors->has('client.visit_date') && $errors != null )
                        {{$errors["client.visit_date"]}}
                    @endif--}}
                    {{ Form::text('upsheet[visit_date]', isset($client) ? $client->visit_date : null, array('class' => 'form-control', 'id' => 'visit_date')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-6">
                <label for="upsheet[agency_id]">Agência <b>*</b>:</label>
                <select name="upsheet[agency_id]" class="form-control js-select">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Agency::all() as $agency)
                        <option value="{{$agency->id}}"
                                @if(isset($client) && $agency->id == $client->agency_id) selected @endif>{{$agency->name." ".$agency->city}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <h4><b>1º Titular</b></h4>
            </div>
            <div class="col-lg-6 2ndHolder_title @if(isset($client) && isset($isEdit) && !$isEdit && $client->first_holder_name == null) hidden @endif" >
                <h4><b>2º Titular</b></h4>
            </div>
        </div>
        <div class="row">
            <div class="form-group @if(isset($client) && isset($isEdit) && !$isEdit && $client->first_holder_name == null) col-lg-12 @else col-lg-6 @endif 1ndHolder_form">
                <div class="form-group col-lg-12 1ndHolder_form_name">
                    <label for="upsheet[first_holder_name]">Nome <b>*</b>:</label>
                    {{ Form::text('upsheet[first_holder_name]', isset($client) ? $client->first_holder_name : null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group col-lg-10 1ndHolder_form_date_birth">
                    <label for="upsheet[first_holder_date_of_birth]">Data de Nascimento:</label>
                    <div class="input-group date datepicker" data-provide="datepicker">
                        {{ Form::text('upsheet[first_holder_date_of_birth]', isset($client) ? $client->first_holder_date_of_birth : null, array('class' => 'form-control', 'id' => 'first_holder_date_of_birth')) }}
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-2 1ndHolder_form_age">
                    <label for="upsheet[first_holder_age]">Idade <b>*</b>:</label>
                    {{ Form::text('upsheet[first_holder_age]', isset($client) ? $client->first_holder_age : null, array('class' => 'form-control', 'id' => 'first_holder_age')) }}
                </div>
                <div class="form-group col-lg-8 1ndHolder_form_job">
                    <label for="upsheet[first_holder_job_id]">Profissão <b>*</b>:</label>
                    <select name="upsheet[first_holder_job_id]" class="form-control js-select" style="width: 100%">
                        <option value="0" disabled selected>Seleccione uma das opções</option>
                        @foreach(App\Job::all() as $job)
                            <option value="{{$job->id}}"
                                    @if(isset($client) && $job->id == $client->first_holder_job_id) selected @endif>{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 2ndHolder_form @if(isset($client) && isset($isEdit) && !$isEdit && $client->first_holder_name == null) hidden @endif">
                <div class="form-group col-lg-12">
                    <label for="upsheet[2nd_holder_name]">Nome:</label>
                    {{ Form::text('upsheet[second_holder_name]', isset($client) ? $client->second_holder_name : null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group col-lg-10">
                    <label for="upsheet[2nd_holder_date_of_birth]">Data de Nascimento:</label>
                    <div class="input-group date datepicker" data-provide="datepicker">
                        {{ Form::text('upsheet[second_holder_date_of_birth]', isset($client) ? $client->second_holder_date_of_birth : null, array('class' => 'form-control', 'id' => 'second_holder_date_of_birth')) }}
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-2">
                    <label for="upsheet[second_holder_age]">Idade</label>
                    {{ Form::text('upsheet[second_holder_age]', isset($client) ? $client->second_holder_age : null, array('class' => 'form-control', 'id' => 'second_holder_age')) }}
                </div>
                <div class="form-group col-lg-8">
                    <label for="upsheet[second_holder_job_id]">Profissão:</label>
                    <select name="upsheet[second_holder_job_id]" class="form-control js-select" style="width: 100%">
                        <option value="0" disabled selected>Seleccione uma das opções</option>
                        @foreach(App\Job::all() as $job)
                            <option value="{{$job->id}}"
                                    @if(isset($client) && $job->id == $client->second_holder_job_id) selected @endif>{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row @if(isset($client) && isset($isEdit) && $isEdit) hidden @endif">
            <div class="form-group col-lg-12"></div>
            <div class="form-group col-lg-1">
                <button type="button" class="btn btn-info" id="addHolder"><span><i class="fa fa-plus-square-o" aria-hidden="true"></i> 2ª Titular</span></button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="upsheet[nif]">NIF:</label>
                {{ Form::text('upsheet[nif]', isset($client) ? $client->nif : null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group col-lg-3">
                <label for="upsheet[phone_number]">Nº de Telefone:</label>
                {{ Form::text('upsheet[phone_number]', isset($client) ? $client->phone_number : null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group col-lg-3">
                <label for="upsheet[mobile_phone_number]">Nº de Telemóvel <b>*</b>:</label>
                {{ Form::text('upsheet[mobile_phone_number]', isset($client) ? $client->mobile_phone_number : null, array('class' => 'form-control ')) }}
            </div>
            <div class="form-group col-lg-4">
                <label for="upsheet[email]">Email:</label>
                {{ Form::email('upsheet[email]', isset($client) ? $client->email : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="upsheet[address]">Morada:</label>
                {{ Form::text('upsheet[address]', isset($client) ? $client->address : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-3">
                <label for="upsheet[zipcode]">Código postal:</label>
                {{ Form::text('upsheet[zipcode]', isset($client) ? $client->zipcode : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-2">
                <label for="upsheet[city]">Localidade:</label>
                {{ Form::text('upsheet[city]', isset($client) ? $client->city : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-3">
                <label for="upsheet[marital_status_id]">Estado Civil <b>*</b>:</label>
                <select name="upsheet[marital_status_id]" class="form-control" id="marital_status" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\MaritalStatus::all() as $marital_status)
                        <option value="{{$marital_status->id}}"
                                @if(isset($client) && $marital_status->id == $client->marital_status_id) selected @endif>{{$marital_status->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-4">
                @if(isset($client) && isset($isEdit) && $isEdit)
                    @php
                        $voucher_type= preg_replace('/[^a-zA-Z]/', '', $client->voucher);
                        $voucher_code = preg_replace('/[^0-9]/', '', $client->voucher);
                    @endphp
                @endif
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="upsheet[voucher_type]">Voucher <b>*</b>:</label>
                        <select name="upsheet[voucher_type]" class="form-control" id="voucher_type" style="width: 100%;">
                            <option value="DC" @if(isset($client) && $voucher_type == "DC") selected @endif>DC</option>
                            <option value="H" @if(isset($client) && $voucher_type == "H") selected @endif>H</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-8">
                        <label for="upsheet[voucher_code]"> </label>
                        {{ Form::text('upsheet[voucher_code]', isset($client) ? $voucher_code : null, array('class' => 'form-control', 'style' => 'margin-top: 11px; margin-left: -25px;')) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row hidden" id="spouse_name">
            <div class="form-group col-lg-6">
                <label for="upsheet[spouse_name]">Nome do Conjuge <b>*</b>:</label>
                {{ Form::text('upsheet[spouse_name]', isset($client) ? $client->spouse_name : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class='form-group col-lg-4'>
                <label for="upsheet[entry_hour]">Hora de Entrada <b>*</b>:</label>
                <div class='input-group date datetimepicker3'>
                    {{ Form::text('upsheet[entry_hour]', isset($client) ? $client->entry_hour : null, array('class' => 'form-control', 'id' => 'entry_hour')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </div>
                </div>
            </div>
            <div class='form-group col-lg-4'>
                <label for="upsheet[leave_hour]">Hora de Saída <b>*</b>:</label>
                <div class='input-group date datetimepicker3' id="leave_hour">
                    {{ Form::text('upsheet[leave_hour]', isset($client) ? $client->leave_hour : null, array('class' => 'form-control', 'id' => 'leave_hour_input')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </div>
                </div>
            </div>
            <div class='form-group col-lg-4'>
                <label for="upsheet[h_tour]">Tour <b>*</b>:</label>
                {{ Form::text('upsheet[h_tour]', isset($client) ? $client->h_tour : null, array('class' => 'form-control', 'id' => 'h_tour')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="upsheet[operator_id]">Cód. Operador <b>*</b>:</label>
                <select name="upsheet[operator_id]" class="form-control" id="operator_code" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Operator::all() as $operator)
                    <option value="{{$operator->id}}" @if(isset($client) && $client->operator_id == $operator->id) selected @endif
                    >{{$operator->code ." - ".$operator->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <label for="upsheet[supervisor_id]">Supervisor <b>*</b>:</label>
                <select name="upsheet[supervisor_id]" class="form-control" id="supervisor_code" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Supervisor::all() as $supervisor)
                        <option value="{{$supervisor->id}}" @if(isset($client) && $client->supervisor_id == $supervisor->id) selected @endif>{{$supervisor->code ." - ".$supervisor->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="upsheet[seller_id]">Vendedor <b>*</b>:</label>
                <select name="upsheet[seller_id]" class="form-control" id="seller_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Seller::all() as $seller)
                        <option value="{{$seller->id}}" @if(isset($client) && $client->seller_id == $seller->id) selected @endif>{{$seller->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <label for="upsheet[manager_id]">Gerente <b>*</b>:</label>
                <select name="upsheet[manager_id]" class="form-control" id="manager_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Manager::all() as $manager)
                        <option value="{{$manager->id}}" @if(isset($client) && $client->manager_id == $manager->id) selected @endif>{{$manager->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2">
                <label for="upsheet[to_id]">TO:</label>
                <select name="upsheet[to_id]" class="form-control" id="TO_id" style="width: 100%">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="form-group col-lg-4" style="text-align: right;"><label for="upsheet[obs]">Observações:</label></div>
            <div class="form-group col-lg-6">
                <div class="row">
                    {{ Form::textarea('upsheet[obs]', null, ['class' => 'field', 'cols' => '60', 'rows' => '4']) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="upsheet[close]">Fecho <b>*</b>:</label>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <select name="upsheet[close]" class="form-control" id="close" style="width: 100%">
                            <option value="1" @if(isset($client) && $client->close== "Sim") selected @endif>Sim</option>
                            <option value="0" @if(isset($client) && $client->close== "Não") selected @endif>Não</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6 @if(isset($client) && !isset($isEdit) && !$isEdit || isset($client) && $client->close == "Sim")hidden @endif" id="justify_bar">
                        <select name="upsheet[n_close_justification_id]" class="form-control" id="n_close_justification" style="width: 100%">
                            <option value="0" disabled selected>Seleccione uma das opções</option>
                            @foreach(App\Justification::all() as $justification)
                                <option value="{{$justification->id}}" @if(isset($client) && $client->n_close_justification_id == $justification->id) selected @endif>{{$justification->description}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-6">
                <label>(<b>*</b>) Campos obrigatórios
                </label>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>