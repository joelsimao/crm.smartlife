<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Inserir Agência</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="agency[name]">Nome da Agência:</label>
                {{ Form::text('agency[name]', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="agency[city]">Localidade:</label>
                {{ Form::text('agency[city]', null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>