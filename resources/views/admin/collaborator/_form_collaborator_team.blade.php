<div class="row collab_team_form hidden">
    <div class="form-group col-lg-6">
        <div class="form-group col-lg-8">
            <label for="client[admission_date]">Data de Admissão <b>*</b>:</label>
            <div class="input-group date datepicker" data-provide="datepicker">
                {{ Form::text('collaborator[admission_date]', null, array('class' => 'form-control')) }}
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Departamento:</label>
            <select name="district_id" class="form-control">
                <option value="0">Seleccione um departamento</option>
                @foreach(\App\Department::all() as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-8">
            <label for="client[obs]">Observações:</label>
            <div class="row">
                {{ Form::textarea('collaborator[obs]', null, ['class' => 'field', 'cols' => '60', 'rows' => '4']) }}
            </div>

        </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Activo:</label>
            {{ Form::checkbox('active', true, null, ['class' => 'form-check-input']) }}
        </div>
    </div>
    <div class="form-group col-lg-6">
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Cargo:</label>
            <select name="district_id" class="form-control">
                <option value="0">Seleccione um Cargo</option>
                @foreach(\App\Role::all() as $role)
                    <option value="{{$role->id}}">{{$role->display_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Excepção:</label>
            {{ Form::checkbox('', true, null, ['class' => 'form-check-input']) }}
        </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Local de Trabalho:</label>
            <select name="district_id" class="form-control">
                <option value="0">Seleccione um local</option>
            </select>
        </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[district_id]">Supervisor/Gerente:</label>
            <select name="district_id" class="form-control">
                <option value="0">Seleccione o supervisor/gerente</option>
            </select>
        </div>
    </div>
</div>