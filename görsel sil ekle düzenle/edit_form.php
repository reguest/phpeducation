<?php
include "config/config.php";
$footerayar=$baglanti->db->prepare("select * from site_ayar where id=?");
$footerayar-> execute(array("1"));
$footeryaz=$footerayar->fetch();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title><?php  echo $footeryaz["title"] ?></title>
  <meta content="Admin Dashboard" name="description">
  <meta content="Themesbrand" name="author">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	.edit-form img {
		width: 150px;
		height: 100px;
	}
</style>
<body>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left"><a href="index.php" class="logo"><span><img src="assets/images/logo-light.png" alt="" height="18"> </span><i>
        <img src="assets/images/logo-sm.png" alt="" height="22"></i></a></div>
  <?php include "header.php"; ?>
    </div><!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
      <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
        <?php include "leftmenu.php"; ?>
        </div><!-- Sidebar -->
        <div class="clearfix"></div>
      </div><!-- Sidebar -left -->
    </div><!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container-fluid">
          <div class="page-title-box">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <h4 class="page-title">Site Genel Ayarları</h4>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Ayarlar</a></li>
                  <li class="breadcrumb-item active">Header</li>
                </ol>
              </div>
              <div class="col-sm-6">
                <div class="float-right d-none d-md-block">
                  <div class="dropdown"><button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-settings mr-2"></i>
                      Ayarlar</button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Site Ayarları</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Menuler</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end row -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 header-title">Ayarlar</h4>
                  <p class="text-muted m-b-30">Site genel ayarları buradan yapılır         </p>
   <form method="POST" class="" action="" enctype="multipart/form-data">
     <?php

     		if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
     		{
     			$id=$_GET[ 'edit_id'];
     			$stmt_eidt=$baglanti->db->prepare('SELECT * FROM footer_image WHERE id=:uid');
     			$stmt_eidt->execute(array(':uid'=>$id));
     			$edit_row=$stmt_eidt->fetch(PDO::FETCH_ASSOC);
     			extract($edit_row);
     		}else

     		{
     			header("Location: index.php");
     		}

     		if(isset($_POST['btn-save']))

     			{

     				$name=$_POST['user_name'];

     				$images=$_FILES['profile']['name'];
     				$tmp_dir=$_FILES['profile']['tmp_name'];
     				$imageSize=$_FILES['profile']['size'];

     				$upload_dir='upload/';
     				$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
     				$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
     				$picProfile=rand(1000, 1000000).".".$imgExt;
     				unlink($upload_dir.$edit_row['picProfile']);
     				move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
     				$stmt=$baglanti->db->prepare('UPDATE footer_image SET username=:uname, picProfile=:uprofile WHERE id=:uid');
     				$stmt->bindParam(':uname', $username);
     				$stmt->bindParam(':uprofile', $picProfile);
     				$stmt->bindParam(':uid', $id);
     				if($stmt->execute())
     				{
     					?>
     					<script type="text/javascript">
     						alert('Successfully Update');
     						window.location.href="index.php";
     					</script>
     					<?php
     				}else

     				?>
     				<script type="text/javascript">
     					alert('Error while update data and iamge');
     					window.location.href="index.php";
     				</script>
     				<?php

     			}


     ?>

     <!-- form insert -->
     	<div class="container">
     		<div class="edit-form">
     			<h1 class="text-center">Edit form </h1>
     			<form method="post" enctype="multipart/form-data">
     				<label>Görsel adı gir</label>
     				<input type="text" name="user_name" class="form-control" value="<?php echo $username;?>"> <?php  echo '</br>'; ?>
     				<label>Mevcut fotoğraf</label>
     				<img src="upload/<?php echo $picProfile; ?>" class="img-rounded">
             <?php  echo '</br>'; ?>
     				<input type="file" name="profile" class="form-control" required="" accept="*/image"><?php  echo '</br>'; ?>
     				<button type="submit" name="btn-save">Güncelle </button>

     			</form>
     		</div>
     		<hr style="border-top: 2px red solid;">
     	</div>
     <!-- end form insert -->


                        </form>
                </div>
              </div>
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- container-fluid -->
      </div><!-- content -->



    <footer class="footer"><?php echo $footeryaz['copyright']; ?></span></footer>
    </div><!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
  </div><!-- END wrapper -->
  <!-- jQuery  -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/metisMenu.min.js"></script>
  <script src="assets/js/jquery.slimscroll.js"></script>
  <script src="assets/js/waves.min.js"></script><!-- App js -->
  <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 18:00:02 GMT -->

</html>
