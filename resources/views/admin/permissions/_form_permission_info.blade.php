<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Editar Permissão - {{$permission->display_name}}</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="permission[name]">Permissão: </label>
                {{ Form::text('permission[name]', $permission->name, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="permission[name]">Display Name: </label>
                {{ Form::text('permission[display_name]', $permission->display_name, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="permission[name]">Descrição: </label>
                {{ Form::text('permission[description]', $permission->description, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
</div>