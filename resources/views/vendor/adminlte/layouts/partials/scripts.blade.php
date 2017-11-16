<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ '/plugins/bootstrap-datepicker.js' }}"></script>
<script src="{{ '/plugins/bootstrap-datepicker.pt.js' }}"></script>
<script src="{{ '/plugins/moment.min.js' }}"></script>
<script src="{{ '/plugins/bootstrap-datetimepicker.min.js' }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<script type="text/javascript">
    $("#search_btn").on('click', function () {
        var agency_id = $('#agency_id').val();
        var seller_id = $('#seller_id').val();
        var manager_id = $('#manager_id').val();
        var supervisor_code = $('#supervisor_code').val();
        var operator_code = $('#operator_code').val();
        var ds = $('#ds').val();
        var de = $('#de').val();
        var newURL= window.location.href.replace(window.location.search,'');
        var search = window.location.search;

        if(agency_id != null){
            if(search == ''){
                search = "?agency_id=" + agency_id;
            } else if(search.indexOf("agency_id=") == -1){
                search = search + "&agency_id=" + agency_id;
            }
        }
        
        if(seller_id != null){
            if(search == ''){
                 search = "?seller_id=" + seller_id;
            } else if(search.indexOf("seller_id=") == -1){
                search = search + "&seller_id=" + seller_id;
            }
        }
        if(manager_id != null){
            if(search == ''){
                search = "?manager_id=" + manager_id;
            } else if(search.indexOf("manager_id=") == -1){
                search = search +"&manager_id=" + manager_id;
            }
        }
        if(supervisor_code != null){
            if(search == ''){
                search = "?supervisor_code=" + supervisor_code;
            } else if(search.indexOf("supervisor_code=") == -1){
                search = search + "&supervisor_code=" + supervisor_code;
            }
        }
        if(operator_code != null){
            if(search == ''){
                search = "?operator_code=" + operator_code;
            } else if(search.indexOf("operator_code=") == -1){
                search = search + "&operator_code=" + operator_code;
            }
        }
        if(ds != '' && de != ''){
            if(search == ''){
                search = "?ds=" + ds + "&de=" + de;
            } else if(search.indexOf("ds=" + ds + "&de=" + de) == -1){
                search = search + "&ds=" + ds + "&de=" + de;
            }
        }
        window.location.href = newURL + search;
    });

    $('#search').keydown(function (e){
        if(e.keyCode == 13){
            $("#search_btn").click();
        }
    });

</script>

{{--Script of the Datepickers--}}
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        language: 'pt',
        autoclose:true,
    });

    $(function () {
        $('.datetimepicker3').datetimepicker({
            format: 'HH:mm'
        });
    });

    $('div.alert-success').delay(3000).fadeOut(350);
</script>

{{--Script of select2--}}
<script>
    $(document).ready(function() {
        $('.js-select').select2();
    });
</script>
