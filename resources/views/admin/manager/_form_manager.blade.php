<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Inserir Gerente</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="manager[name]">Nome:</label>
                {{ Form::text('manager[name]', null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>