<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  <title>Admin Management</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->

 







<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/card-tour.css') }}" rel="stylesheet">
<link href="{{ asset('css/clock.css') }}" rel="stylesheet">
<!-- <script src="sweetalert2/dist/sweetalert2.all.min.js"></script> -->
<!-- <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" > -->

<!-- <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"> -->





</head>
<body class="hold-transition sidebar-mini">
<div  id="app" class="wrapper">


 <!-- // main sidebar -->
 @include('components.main_sidebar')




 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
               <clock-component></clock-component>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if(Session()->has('success'))
                <div class="alert alert-success">
                    {{Session()->get('success')}}
                </div>
                @endif
                @if(Session()->has('error'))
                <div class="alert alert-danger">
                    {{Session()->get('error')}}
                </div>
                @endif

                
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    @yield('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">


          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  @include('components.footder')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<script src="/js/sweetalert.js"></script>
<!-- <script src="{{ asset('js/sweetalert.js') }}" ></script> -->
<script>
    $(document).ready(function () {
        $('.table').DataTable({
          destroy: true,
          searching: true
        });
    });

    // $(document).ready(function() {
    // var table = $('#examplePlayer').DataTable( {
    //     lengthChange: false,
    //     buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    // } );
 
    // table.buttons().container()
    //     .appendTo( '#examplePlayer_wrapper .col-md-6:eq(0)' );
    // } );





</script>

   
<script type="text/javascript" >
             
             $(document).ready( function () {
     
               $(document).on('click', '.editTournaments', function(e){
                   $('#editTournamentsModal').modal('show');
                   e.preventDefault();
     
                   var id = $(this).attr('id');
                   $.ajax({
                     
                       url: "{{url('admin/tournaments/details')}}/"+id,
                       method: "GET",
                       success: function(data){
                           console.log(data);
                          // alert("Hello! Name   "  + data.name + "  GG"  );
                          $('#e_name').val(data.name);
                            $('#e_description').val(data.description);
                            $('#e_address').val(data.address);
                            $('#e_date').val(data.date);
                           
                         //  $('#updateTournamentsForm').attr('action', "{{url('admin/tournaments')}}/"+id);
                       }
                   })
               });
     
     
               $(document).on('click', '.editDivision', function(e){
                   $('#editDivisionModal').modal('show');
                   e.preventDefault();
         
                   var id = $(this).attr('id');
                   $.ajax({
                     
                       url: "{{url('admin/divisions/details')}}/"+id,
                       method: "GET",
                       success: function(data){
                           console.log(data);
                          // alert("Hello! Name   "  + data.name + "  GG"  );
                          $('#divison_name').val(data.name);
                          $('#divison_description').val(data.description);
                         
                           
                          $('#updateDivisionForm').attr('action', "{{url('admin/divisions')}}/"+id);
                       }
                   })
               });

               
               $(document).on('click', '.editPlayer', function(e){
                   $('#editPlayerModal').modal('show');
                   e.preventDefault();
         
                   var id = $(this).attr('id');
                  

               
                   $.ajax({
                     
                       url: "{{url('admin/players/details')}}/"+id,
                       method: "GET",
                       success: function(data){
                           console.log(data);
                          //  alert("Hello! Name   "  + data.name + "  GG"  );
                          $('#player_name').val(data.name);
                          $('#player_no').val(data.no);
                          $('#player_phone').val(data.phone);
                          $('#player_tag').val(data.tag_id);
                          $('#_id').val(id); 

                          $('#updateeditPlayerForm').attr('action', "{{url('admin/players')}}/"+id);
                
                       }
                   })
               });




     
             });
                    
     </script>

<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->
</body>
</html>
