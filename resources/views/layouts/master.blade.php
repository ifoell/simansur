<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simansur</title>
    <!-- Bootstrap -->
    <link href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendor/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    {{-- skin green --}}
    <link href="{{asset('vendor/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/vendor/google-code-prettify/bin/prettify.min.css" rel="stylesheet"> 
    <!-- Select2 -->
    <link href="/vendor/select2/dist/css/select2.min.css" rel="stylesheet"> 
   <!-- Switchery -->
    <link href="/vendor/switchery/dist/switchery.min.css" rel="stylesheet"> 
   <!-- starrr -->
    <link href="/vendor/starrr/dist/starrr.css" rel="stylesheet"> 
    <!-- Datatables -->
    <link href="{{asset('vendor/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{asset('vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
     <link href="{{asset('vendor/normalize-css/normalize.css')}}" rel="stylesheet">
     <link href="{{asset('vendor/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
     <link href="{{asset('vendor/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

         <!-- Dropzone.js -->
    <link href="{{asset('vendor/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">

{{--     <style>
      .thumb {
        border: 1px solid #000;
        margin: 10px 5px 0 0;
      }
    </style> --}}


{{--    <link href="{{asset('vendor/cropper/dist/cropper.min.css')}}" rel="stylesheet"> --}}
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Simansur</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="{{asset('image/rajonet.png')}}" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>Admin</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>Menu</h3>
            <ul class="nav side-menu">
              <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
              <li><a href="{{route('daftar_surat')}}"><i class="fa fa-table"></i> Daftar Surat</a></li>
              <li><a href="{{route('daftar_surat_masuk')}}"><i class="fa fa-table"></i> Daftar Surat Masuk </a></li>
              <li><a href="{{route('daftar_direksi')}}"><i class="fa fa-table"></i> Daftar Karyawan </a></li>
              <li><a href="{{route('daftar_client')}}"><i class="fa fa-table"></i> Daftar Client </a></li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Akun</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-user"></i> Pengaturan akun </a></li>
              <li><a><i class="fa fa-user"></i> Logout </a></li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->
      </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="images/img.jpg" alt="">Admin
                <span class=" fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="javascript:;"> Profile</a></li>
                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
            <!--hapus notif pesan-->
          </ul>
        </nav>
      </div>
    </div>
    <div class="right_col" role="main">
      <div class="">
          @include('partials.flash')
          @yield('content')
      </div>
    </div>

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>
    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendor/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- Datatables -->
   <script src="{{asset('vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
   <script src="{{asset('vendor/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
   <script src="{{asset('vendor/jszip/dist/jszip.min.js')}}"></script>
   <script src="{{asset('vendor/pdfmake/build/pdfmake.min.js')}}"></script>
   <script src="{{asset('vendor/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- iCheck -->
    <script src="{{asset('vendor/iCheck/icheck.min.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendor/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('vendor/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- Flot -->
{{--     <script src="{{asset('vendor/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendor/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendor/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendor/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendor/Flot/jquery.flot.resize.js')}}"></script> --}}
    <!-- Flot plugins -->
{{--     <script src="{{asset('vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendor/flot.curvedlines/curvedLines.js')}}"></script> --}}
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendor/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- bootstrap-wysiwyg -->
   <script src="{{asset('vendor/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
   <script src="{{asset('vendor/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
   <script src="{{asset('vendor/google-code-prettify/src/prettify.js')}}"></script>
   <!-- jQuery Tags Input -->
   <script src="{{asset('vendor/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
   <!-- Switchery -->
   <script src="{{asset('vendor/switchery/dist/switchery.min.js')}}"></script>
   <!-- Select2 -->
   <script src="{{asset('vendor/select2/dist/js/select2.full.min.js')}}"></script>
   <!-- Parsley -->
   <script src="{{asset('vendor/parsleyjs/dist/parsley.min.js')}}"></script>
   <!-- Autosize -->
   <script src="{{asset('vendor/autosize/dist/autosize.min.js')}}"></script>
   <!-- jQuery autocomplete -->
   <script src="{{asset('vendor/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
   <!-- starrr -->
   <script src="{{asset('vendor/starrr/dist/starrr.js')}}"></script>
   <!-- bootstrap-datetimepicker -->
<script src="{{asset('vendor/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>
    <script>
      $('#tanggal_awal').datetimepicker({
          format: 'YYYY-MM-DD'
      });


      //untuk preview image sebelum upload
      function previewImages() {
          var $preview = $('#preview').empty();
          if (this.files) $.each(this.files, readAndPreview);
          function readAndPreview(i, file) {  
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
              return alert(file.name +" is not an image");
            } // else... 
            var reader = new FileReader();
            $(reader).on("load", function() {
              $preview.append($("<img/>", {src:this.result, height:200}));
            });
            reader.readAsDataURL(file);
          }
        }
        $('#file-input').on("change", previewImages);

    </script>

        <!-- Dropzone.js -->
    <script src="/vendor/dropzone/dist/min/dropzone.min.js"></script>

    @yield('scripts')
  </body>
</html>
