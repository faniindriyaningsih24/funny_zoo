<?php
  INI_SET("display_errors",0);
?>

<?php
@session_start();
if(empty($_SESSION['status_login']))
{
  header('Location:index_login.php');

}

  if($_GET['id']=="logout")
  {
     unset($_SESSION['status_login']);
   unset($_SESSION['status_level']); 
    unset($_SESSION['nama_user']);
    header('Location:index_login.php');
  }
?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Funny Zoo_FZBogor*BackEnd*</title>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="shortcut icon" href="images/gambar/logo.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index3.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Funny</b>Zoo<b>Bogor</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="index3.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          

         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/user/<?php echo $_SESSION['foto_user']; ?>" class="user-image" alt="User Image">

              <span class="hidden-xs"><?php  echo $_SESSION['nama_user'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/user/<?php echo $_SESSION['foto_user']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php  echo $_SESSION['nama_user'];?> 
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
               
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="index3.php?id=logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/user/<?php echo $_SESSION['foto_user']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php  echo $_SESSION['nama_user'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">




        <!-- /.Caption Group Menu -->
       
           

               
              <li>
                  <a href="index3.php?id=1">
                    <i class="fa fa-th"></i> <span>TENTANG KAMI</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>

                <li>
                  <a href="index3.php?id=2">
                    <i class="fa fa-th"></i> <span>INFO PENGUNJUNG</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>

                 <li>
                  <a href="#">
                    <i class="fa fa-th"></i> <span>FLORA & FAUNA</span>
                    <span class="pull-right-container">
                    <span class="label label-primary pull-right">2</span>
                    </span>
                  </a>
                    <ul class="treeview-menu">
                    <li><a href="index3.php?id=3"><i class="fa fa-circle-o"></i>FLORA</a></li>
                    <li><a href="index3.php?id=4"><i class="fa fa-circle-o"></i>FAUNA</a></li>
                   
                  </ul>
                </li>

                  <li>
                  <a href="index3.php?id=5">
                    <i class="fa fa-th"></i> <span>FASILITAS</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>

                <li>
                  <a href="index3.php?id=10">
                    <i class="fa fa-th"></i> <span>SARANA</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>

                 <li>
                  <a href="index3.php?id=6">
                    <i class="fa fa-th"></i> <span>BERITA & ACARA</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>

                 <li>
                  <a href="index3.php?id=7">
                    <i class="fa fa-th"></i> <span>PROMO</span>
                    <span class="pull-right-containesr">
                    </span>
                  </a>
                </li>

                <li>
                  <a href="index3.php?id=8">
                    <i class="fa fa-th"></i> <span>USER</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>

                <li>
                  <a href="index3.php?id=9">
                    <i class="fa fa-th"></i> <span>STATUS</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                </li>
          

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>Sistem Informasi</b>
        <small>FUNNY ZOO_FZBogor</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
       
        <div class="box-body">
          
          <?php
              if($_GET['id']==1)
              {
                include('web_tentang.php');
              } 
            
              if($_GET['id']==2)
              {
                include('web_ip.php');
              }
              if($_GET['id']==3)
              {
                include('web_flora.php');
              } 
              if($_GET['id']==4)
              {
                include('web_fauna.php');
              } 
              if($_GET['id']==5)
              {
                include('web_fasilitas.php');
              }  
              if($_GET['id']==6)
              {
                include('web_berita.php');
              } 
              if($_GET['id']==7)
              {
                include('web_promo.php');
              } 
              if($_GET['id']==8)
              {
                include('web_user.php');
              }
              if($_GET['id']==9)
              {
                include('web_status.php');
              } 
              if($_GET['id']==10)
              {
                include('web_sarana.php');
              } 
          ?>

        </div>
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights
    reserved.
  </footer>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
