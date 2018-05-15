<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Registro QR | </title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-qrcode"></i> <span>Sistema QR</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>

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
                    <img src="/gentelella/images/user.png" alt="">Anibal
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>




              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div id="app">
          <lector></lector>
        </div>






          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/gentelella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/gentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/gentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- datatables -->
    {{-- <script src="/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
       <script src="/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
       <script src="/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script> --}}


    <!-- Custom Theme Scripts -->
    <script src="/gentelella/build/js/custom.min.js"></script>

  </body>
</html>
