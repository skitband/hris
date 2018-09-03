
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jVectorMap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{asset('plugins/chartjs-old/Chart.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>

<script>
  $(document).ready(function(){
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })

    $('.pagination>li').addClass("page-item");
    $('.pagination>li>a').addClass("page-link");
    //$('.pagination>li>a').addClass("active");
    // $('.page-item>.active').css({ 'background-color' : "#007bff" });
    $('.pagination>li>span').addClass("page-link");

    $('.form_profile input').attr('readonly', true);

    $('#enableprofile').click(function(){
      $('.form_profile input').removeAttr('readonly', true);
      $('#updateprofile').removeClass('invisible', true);
    });
    
  });
</script>
