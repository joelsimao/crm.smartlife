<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Editar Cargo - {{$role->display_name}}</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="role[name]">Cargo: </label>
                {{ Form::text('role[name]', $role->name, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="role[name]">Display Name: </label>
                {{ Form::text('role[display_name]', $role->display_name, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="role[name]">Descrição: </label>
                {{ Form::text('role[description]', $role->description, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="permissions[]">Permissões:</label>
                <select name="permissions[]" class="form-control js-select" style="width: 100%" multiple>
                    <option value="0" disabled>Seleccione uma opção</option>
                    @foreach(\App\Permission::all() as $permission)
                        <option value="{{$permission->id}}" @if($role_permissions->contains('id', $permission->id)) selected @endif>{{$permission->display_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>