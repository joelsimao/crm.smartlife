<div class="row">
    <div class="form-inline" >

        <div class="col-lg-12" align="right" >
            <label for="nif">Pesquisa por NIF</label>
            {{ Form::text('nif', isset($nif) ? $nif : null, array('class' => 'form-control', 'id' => 'nif')) }}
            <button type="button" class="btn btn-info" id="nif_search_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
