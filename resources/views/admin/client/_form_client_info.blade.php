<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@if( isset($isEdit)) Editar Cliente @else Inserir Cliente @endif</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="client[name]">Nome:</label>
                {{ Form::text('client[name]', isset($client) ? $client->name : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-4">
                <label for="client[email]">Email:</label>
                {{ Form::email('client[email]', isset($client) ? $client->email : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-2">
                <label for="client[nif]">NIF:</label>
                {{ Form::text('client[nif]', isset($client) ? $client->nif : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-3">
                <label for="client[job_id]">Profissão:</label>
                <select name="client[job_id]" class="form-control js-select">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Job::all() as $job)
                        <option value="{{$job->id}}"
                                @if(isset($client) && $job->id == $client->job_id) selected @endif>{{$job->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="client[date_of_birth]">Data de Nascimento:</label>
                <div class="input-group date datepicker" data-provide="datepicker">
                    {{ Form::text('client[date_of_birth]', isset($client) ? $client->date_of_birth : null, array('class' => 'form-control', 'id' => 'date_of_birth')) }}
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-1">
                <label for="client[age]">Idade</label>
                {{ Form::text('client[age]', isset($client) ? $client->age : null, array('class' => 'form-control', 'readonly', 'id' => 'age')) }}
            </div>

            <div class="form-group col-lg-3">
                <label for="client[marital_status]">Estado Civil:</label>
                <select name="client[marital_status_id]" class="form-control" id="marital_status">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\MaritalStatus::all() as $marital_status)
                        <option value="{{$marital_status->id}}"
                                @if(isset($client) && $marital_status->id == $client->marital_status_id) selected @endif>{{$marital_status->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row hidden" id="spouse_name">
            <div class="form-group col-lg-6">
                <label for="client[spouse_name]">Nome do Conjuge:</label>
                {{ Form::text('client[spouse_name]', isset($client) ? $client->spouse_name : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="client[address]">Morada:</label>
                {{ Form::text('client[address]', isset($client) ? $client->address : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-4">
                <label for="client[zipcode]">Código postal:</label>
                {{ Form::text('client[zipcode]', isset($client) ? $client->zipcode : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-2">
                <label for="client[city]">Localidade:</label>
                {{ Form::text('client[city]', isset($client) ? $client->city : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="client[phone_number]">Nº de Telefone:</label>
                {{ Form::text('client[phone_number]', isset($client) ? $client->phone_number : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-4">
                <label for="client[mobile_phone_number]">Nº de Telemóvel:</label>
                {{ Form::text('client[mobile_phone_number]', isset($client) ? $client->mobile_phone_number : null, array('class' => 'form-control ')) }}
            </div>
        </div>

    </div>
    <!-- /.box-body -->
</div>