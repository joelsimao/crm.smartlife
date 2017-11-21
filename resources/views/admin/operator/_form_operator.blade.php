<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Inserir Operador</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="operator[code]">Código:</label>
                {{ Form::text('operator[code]', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="operator[name]">Nome:</label>
                {{ Form::text('operator[name]', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="operator[name]">Supervisor:</label>
                <select name="operator[supervisor_id]" class="form-control" id="marital_status" style="width: 100%">
                    <option value="0" disabled selected>Seleccione uma das opções</option>
                    @foreach(App\Supervisor::all() as $supervisor)
                        <option value="{{$supervisor->id}}">{{$supervisor->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>
    <!-- /.box-body -->
</div>