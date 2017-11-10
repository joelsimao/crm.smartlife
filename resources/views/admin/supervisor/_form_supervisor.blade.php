<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Inserir Supervisor</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="supervisor[code]">Código:</label>
                {{ Form::text('supervisor[code]', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="supervisor[name]">Nome:</label>
                {{ Form::text('supervisor[name]', null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>