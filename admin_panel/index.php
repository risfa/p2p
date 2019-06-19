<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 05:05:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>P2P Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index-2.html">P2P Dashboard</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

        <li class="nav-item dropdown show">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fas fa-fw fa-folder"></i>
            <span>Main Data</span>
          </a>
          <div class="dropdown-menu show" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?menu=user">User Database</a>
            <a class="dropdown-item" href="index.php?menu=quest">Quest Database</a>
            <a class="dropdown-item" href="index.php?menu=pathway_manager">Pathway Manager</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?menu=user">
            <i class="fas fa-fw fa-user"></i>
            <span>User Control</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <?php
              switch ($_GET['menu']) {
                case 'index':
                  include("home.php");
                  break;
                  
                  case 'user':
                  include("tbl_user.php");
                  break;

                  case 'quest':
                  include("tbl_quest.php");
                  break;

                  case 'insert_user':
                  include("insert_user.php");
                  break;

                  case 'insert_quest':
                  include("insert_quest.php");
                  break;

                  case 'pathway_manager':
                  include("pathway_manager.php");
                  break;
                
                default:
                  include("home.php");
                  break;
              }

           ?>
         

         
        </div>
        <!-- /.container-fluid -->
        <?php $tahun_ini = date('Y'); ?>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website <?php echo $tahun_ini ?></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <!-- <script src="js/demo/chart-area-demo.js"></script> -->

  </body>


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 05:08:17 GMT -->
</html>
