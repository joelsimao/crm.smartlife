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
            <label for="collaborator[department_id]">Departamento:</label>
            <select name="collaborator[department_id]" class="form-control">
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
            <div class="row">
                <div class="form-group col-lg-8 hidden" id="coordenator">
                    <label for="collaborator[coordenator_id]">Coordenador:</label>
                    <select name="collaborator[coordenator_id]" class="form-control">
                        <option value="0">Seleccione um coordenador</option>
                        {{--@foreach(\App\Department::all() as $coordenator)--}}
                            {{--<option value="{{$department->id}}">{{$->name}}</option>--}}
                        {{--@endforeach--}}
                    </select>
                </div>
                <div class="col-lg-4">
                    <label>
                        Activo: {{ Form::checkbox('active', true, null, ['class' => 'form-check-input']) }}
                    </label>
                </div>
            </div>

        </div>
    </div>
    <div class="form-group col-lg-6">
        <div class="form-group col-lg-10">
            <label for="collaborator[role_id]">Cargo:</label>
            {{--<div class="row">--}}
                {{--<div class="col-lg-7">--}}
                    <select name="roles[]" class="form-control js-select" multiple="multiple" style="width: 100%" id="role_select">
                        <option value="0" disabled="">Seleccione um Cargo</option>
                        @foreach(\App\Role::all() as $role)
                            <option value="{{$role->id}}">{{$role->display_name}}</option>
                        @endforeach
                    </select>
                {{--</div>--}}
                {{--<div class="col-lg-5">--}}
                    {{--<label for="collaborator[role_id]">--}}
                        {{--Excepção: {{ Form::checkbox('', true, null, ['class' => 'form-check-input']) }}--}}
                    {{--</label>--}}
                {{--</div>--}}
            </div>
        <div class="form-group col-lg-10">
            <label for="collaborator[workspace_id]">Local de Trabalho:</label>
            <select name="collaborator[workspace_id]" class="form-control">
                <option value="0">Seleccione um local</option>
            </select>
        </div>
        <div class="form-group col-lg-10 hidden" id="manager">
            <label for="collaborator[manager_id]">Supervisor/Gerente:</label>
            <select name="collaborator[manager_id]" class="form-control">
                <option value="0">Seleccione o supervisor/gerente</option>
            </select>
        </div>
    </div>
</div>