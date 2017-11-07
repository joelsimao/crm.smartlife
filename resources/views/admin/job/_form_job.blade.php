<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Inserir Profissão</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="job[name]">Nome da Profissão:</label>
                {{ Form::text('job[name]', null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>