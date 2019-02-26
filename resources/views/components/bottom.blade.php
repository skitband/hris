
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS 1.0.2 -->
<!-- <script src="{{asset('plugins/chartjs-old/Chart.min.js')}}"></script> -->
<!-- PAGE SCRIPTS -->
<!-- <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script> -->
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jVectorMap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>


<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('js/dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.buttons.min.js')}}"></script>

<!-- Select 2 -->
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>

<!-- Application JS -->
<script src="{{asset('js/custom.js')}}"></script>


<script>
  $(document).ready(function(){

    $('.form_profile input').attr('readonly', true);

    $('#enableprofile').click(function(){
      $('.form_profile input').removeAttr('readonly', true);
      $('#updateprofile').removeClass('invisible', true);
    });

    $('.resetpw').click(function(){
      event.preventDefault();

      if(confirm("Please Confirm Reset Password?")){
        $('#resetpw-form').submit();
      }else{
        return false;
      }
      
    });

    $('.deactivate-link').click(function(){
      event.preventDefault();

      if(confirm("Please Confirm Deactivate Employee?")){
        $('#deactivate-form').submit();
      }else{
        return false;
      }
      
    });
    
    $('#table_employees').DataTable({
     "stateSave": true,
      processing: true,
      serverSide: true,
      "ajax": '{{route('getEmployees')}}',
      "columns": [
            { "data" : "emp_id"},
            { "data" : 'fullname'},
            { "data" : "birthdate"},
            { "data" : "address"},
            { "data" : "job"},
            { "data" : "created_at"},
            { "data" : 'action', name: 'action', orderable: false, searchable: false, exportable : false}
      ],
      "order": [[ 0, "desc" ]]
    });
    
  });
</script>
