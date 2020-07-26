<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="InterSec adalah suatu team yang di bangun pada tahun 2020 dan bertujuan untuk membangun IT konsultan dan kita juga memberikan berbagai jasa seperti pentest,web development, dan design.">
  <meta name="keywords" content="intersec">
  <meta name="author" content="InterSec">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BARBERSHOP ABADI II | Form Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="dist/img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
<script data-ad-client="ca-pub-9186368921470910" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
      <div class="content-header row">
      </div>
      <div class="content-body ">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-sm-8 col-md-4 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                  <div class="card-title text-center">
                      <img src="dist/img/img.svg" width="150px" alt="logo">
					  <h4 class="text-center">BARBERSHOP ABADI II</h4>
                  </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" action="cek_login.php" method="POST">
					<fieldset class="form-group position-relative has-icon-left">
                        <input type="text" autofocus class="form-control form-control-lg input-lg" id="id_user" placeholder="Username" name="usern" value="">
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input autocomplete="new-password" type="password" class="form-control form-control-lg input-lg" name="password" id="passwd" value="" placeholder="Password">
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">                      
                        <select class="form-control" id="level" name="level">
                          <option>admin</option>
                          <option>member</option>
                        </select>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                        </fieldset>
                      <div class="form-group row">
					  <!--
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" name="remember" id="remember-me" value="1"  class="chk-remember">
                            <label for="remember-me"> Biarkan tetap Masuk</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right"><a href="#" id="forgot-pwd" class="card-link">Lupa Kata Sandi?</a></div>
                      </div>
					  -->
                      <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i><b>Masuk</b></button>
                    </form>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <div class="">
                    <p class="float-sm-left m-0"> &copy; BARBERSHOP ABADI II - 2020</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <style>
  .buy-now {
    position: fixed;
    bottom: 5%;
    right: 2%;
    z-index: 1051;
}
</style>

  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
