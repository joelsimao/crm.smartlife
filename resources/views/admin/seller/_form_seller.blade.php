<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Inserir Vendedor</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="seller[name]">Nome:</label>
                {{ Form::text('seller[name]', null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>