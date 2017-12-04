<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@if( isset($isEdit)) Editar Colaborador @else Inserir Colaborador @endif</h3>
    </div>
    <div class="box-body">
        @if(isset($errors) && $errors != null)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Erro!</strong> {{$error}}
                </div>
            @endforeach
        @endif
        <ul class="nav nav-tabs">
            <li class="active" id="collab_info"><a href="#">Dados do Colaborador</a></li>
            <li><a href="#" id="collab_team">Equipa</a></li>
        </ul>
        @include('admin.collaborator._form_collaborator_info')
        @include('admin.collaborator._form_collaborator_team')
    </div>
    <!-- /.box-body -->
</div>