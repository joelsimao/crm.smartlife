<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ '/plugins/bootstrap-datepicker.js' }}"></script>
<script src="{{ '/plugins/bootstrap-datepicker.pt.js' }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<script type="text/javascript">
    $("#search").on('click', function () {
        console.log('Hello');
        /*console.log($('#search').val());
*/
    });
</script>

{{--Script of the Datepickers--}}
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        language: 'pt',
    });

    $('div.alert').delay(3000).fadeOut(350);
</script>

{{--Script of select2--}}
<script>
    $(document).ready(function() {
        $('.js-select').select2();
    });
</script>
