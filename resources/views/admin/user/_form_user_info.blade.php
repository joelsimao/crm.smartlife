<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Utilizador</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="user[name]">Nome:</label>
                {{ Form::text('user[name]', isset($user) ? $user->name : null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="user[email]">Email:</label>
                {{ Form::email('user[email]', isset($user) ? $user->email : null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="user[password]">Password:</label><br>
                {{ Form::password('user[password]', null, array('class' => 'form-control', 'placeholder' => 'Inserir Password')) }}
            </div>
            <div class="form-group col-lg-6">
                <label for="user[confirm_password]">Confirmar Password:</label><br>
                {{ Form::password('user[confirm_password]', null, array('class' => 'form-control', 'placeholder' => 'Confirmar Password')) }}
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>