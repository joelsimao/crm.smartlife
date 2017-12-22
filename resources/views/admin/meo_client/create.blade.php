<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">@if( isset($isEdit)) Editar Cliente MEO @else Inserir Cliente MEO @endif</h3>
    </div>
    <div class="box-body">
        <ul class="nav nav-tabs">
            <li class="active" id="meo_client_info"><a href="#">Dados do Cliente</a></li>
            <li><a href="#" id="meo_client_services">Serviços</a></li>
        </ul>

        @if(isset($errors) && $errors != null)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <strong>Erro!</strong> {{$error}}
                </div>
            @endforeach
        @endif

        @include('admin.meo_client._form_meo_client_info')
        @include('admin.meo_client._form_meo_client_services')
    </div><!-- /.box-body -->
</div>