<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@if( isset($isEdit)) Editar Cliente @else Inserir Cliente @endif</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="client[visit_date]">Data de Visita*:</label>
                <div class="input-group date datepicker" data-provide="datepicker">
                    {{ Form::text('client[visit_date]', isset($client) ? $client->visit_date : null, array('class' => 'form-control', 'id' => 'visit_date')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-6">
                <label for="client[agency_id]">Agência*:</label>
                <select name="client[agency_id]" class="form-control js-select">
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
                <label><b>1º Titular</b></label>
            </div>
            <div class="col-lg-6 2ndHolder_title hidden">
                <label><b>2º Titular</b></label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-12 1ndHolder_form">
                <div class="form-group col-lg-12 1ndHolder_form_name">
                    <label for="client[1st_holder_name]">Nome:</label>
                    {{ Form::text('client[first_holder_name]', isset($client) ? $client->first_holder_holder_name : null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group col-lg-10 1ndHolder_form_date_birth">
                    <label for="client[first_holder_date_of_birth]">Data de Nascimento:</label>
                    <div class="input-group date datepicker" data-provide="datepicker">
                        {{ Form::text('client[first_holder_date_of_birth]', isset($client) ? $client->first_holder_holder_date_of_birth : null, array('class' => 'form-control', 'id' => 'first_holder_date_of_birth')) }}
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-2 1ndHolder_form_age">
                    <label for="client[1st_holder_age]">Idade</label>
                    {{ Form::text('client[first_holder_age]', isset($client) ? $client->first_holder_age : null, array('class' => 'form-control', 'readonly', 'id' => 'first_holder_age')) }}
                </div>
                <div class="form-group col-lg-8 1ndHolder_form_job">
                    <label for="client[first_holder_job_id]">Profissão:</label>
                    <select name="client[first_holder_job_id]" class="form-control js-select" style="width: 100%">
                        <option value="0" disabled selected>Seleccione uma das opções</option>
                        @foreach(App\Job::all() as $job)
                            <option value="{{$job->id}}"
                                    @if(isset($client) && $job->id == $client->first_holder_job_id) selected @endif>{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-6 2ndHolder_form hidden">
                <div class="form-group col-lg-12">
                    <label for="client[2nd_holder_name]">Nome:</label>
                    {{ Form::text('client[second_holder_name]', isset($client) ? $client->second_holder_name : null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group col-lg-10">
                    <label for="client[2nd_holder_date_of_birth]">Data de Nascimento:</label>
                    <div class="input-group date datepicker" data-provide="datepicker">
                        {{ Form::text('client[second_holder_date_of_birth]', isset($client) ? $client->second_holder_date_of_birth : null, array('class' => 'form-control', 'id' => 'second_holder_date_of_birth')) }}
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-lg-2">
                    <label for="client[second_holder_age]">Idade</label>
                    {{ Form::text('client[second_holder_age]', isset($client) ? $client->second_holder_age : null, array('class' => 'form-control', 'readonly', 'id' => 'second_holder_age')) }}
                </div>
                <div class="form-group col-lg-8">
                    <label for="client[second_holder_job_id]">Profissão:</label>
                    <select name="client[second_holder_job_id]" class="form-control js-select" style="width: 100%">
                        <option value="0" disabled selected>Seleccione uma das opções</option>
                        @foreach(App\Job::all() as $job)
                            <option value="{{$job->id}}"
                                    @if(isset($client) && $job->id == $client->second_holder_job_id) selected @endif>{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-12"></div>
            <div class="form-group col-lg-1">
                <button type="button" class="btn btn-info" id="addHolder"><span><i class="fa fa-plus-square-o" aria-hidden="true"></i> 2ª Titular</span></button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="client[nif]">NIF:</label>
                {{ Form::text('client[nif]', isset($client) ? $client->nif : null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group col-lg-3">
                <label for="client[phone_number]">Nº de Telefone:</label>
                {{ Form::text('client[phone_number]', isset($client) ? $client->phone_number : null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group col-lg-3">
                <label for="client[mobile_phone_number]">Nº de Telemóvel:</label>
                {{ Form::text('client[mobile_phone_number]', isset($client) ? $client->mobile_phone_number : null, array('class' => 'form-control ')) }}
            </div>
            <div class="form-group col-lg-4">
                <label for="client[email]">Email:</label>
                {{ Form::email('client[email]', isset($client) ? $client->email : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="client[address]">Morada:</label>
                {{ Form::text('client[address]', isset($client) ? $client->address : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-3">
                <label for="client[zipcode]">Código postal:</label>
                {{ Form::text('client[zipcode]', isset($client) ? $client->zipcode : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-2">
                <label for="client[city]">Localidade:</label>
                {{ Form::text('client[city]', isset($client) ? $client->city : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-3">
                <label for="client[marital_status]">Estado Civil:</label>
                <select name="client[marital_status_id]" class="form-control" id="marital_status" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\MaritalStatus::all() as $marital_status)
                        <option value="{{$marital_status->id}}"
                                @if(isset($client) && $marital_status->id == $client->marital_status_id) selected @endif>{{$marital_status->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-4">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="client[voucher_type]">Voucher:</label>
                        <select name="client[voucher_type]" class="form-control" id="voucher_type" style="width: 100%;">
                            <option value="DC">DC</option>
                            <option value="H">H</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-8">
                        <label for="client[voucher_code]"> </label>
                        {{ Form::text('client[voucher_code]', null, array('class' => 'form-control', 'style' => 'margin-top: 5px; padding-left:0px; padding-right:0px;')) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row hidden" id="spouse_name">
            <div class="form-group col-lg-6">
                <label for="client[spouse_name]">Nome do Conjuge:</label>
                {{ Form::text('client[spouse_name]', isset($client) ? $client->spouse_name : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class='form-group col-lg-6'>
                <label for="client[entry_hour]">Hora de Entrada:</label>
                <div class='input-group date datetimepicker3'>
                    {{ Form::text('client[entry_hour]', isset($client) ? $client->entry_hour : null, array('class' => 'form-control')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </div>
                </div>
            </div>
            <div class='form-group col-lg-6'>
                <label for="client[leave_hour]">Hora de Saída:</label>
                <div class='input-group date datetimepicker3'>
                    {{ Form::text('client[leave_hour]', isset($client) ? $client->leave_hour : null, array('class' => 'form-control')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="client[operator_id]">Cód. Operador:</label>
                <select name="client[operator_id]" class="form-control" id="operator_code" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Operator::all() as $operator)
                        <option value="{{$operator->id}}">{{$operator->code ." - ".$operator->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <label for="client[supervisor_id]">Supervisor:</label>
                <select name="client[supervisor_id]" class="form-control" id="supervisor_code" style="width: 100%">
                    <option value="0" disabled selected>Supervisor</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="client[seller_id]">Vendedor:</label>
                <select name="client[seller_id]" class="form-control" id="seller_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Seller::all() as $seller)
                        <option value="{{$seller->id}}">{{$seller->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-2">
                <label for="client[manager_id]">Gerente:</label>
                <select name="client[manager_id]" class="form-control" id="manager_id" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Manager::all() as $manager)
                        <option value="{{$manager->id}}">{{$manager->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2">
                <label for="client[to_id]">TO:</label>
                <select name="client[to_id]" class="form-control" id="TO_id" style="width: 100%">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="form-group col-lg-4" style="text-align: right;"><label for="client[obs]">Observações:</label></div>
            <div class="form-group col-lg-6">
                <div class="row">
                    {{ Form::textarea('client[obs]', null, ['class' => 'field', 'cols' => '60', 'rows' => '4']) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="client[close]">Fecho:</label>
                <select name="client[close]" class="form-control" id="close" style="width: 100%">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>