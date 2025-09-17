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
             <form method="POST" class="" action="" enctype="multipart/form-data">
     <?php

     //formu güncelleme ile veri tabanına ekler
     if(isset($_POST['kaydet']))
              {
                $id='2';
                $title=$_POST['title'];//Site bilgilerini inputlardan alacağımızı belirttik
                $email=$_POST['email'];//Site bilgilerini inputlardan alacağımızı belirttik

                $sorgu=$baglanti->db->prepare(" UPDATE site_ayar set title=? ,email=? where id=1 ");//Güncelleme komutlarımızı yazdık
                $guncelle=$sorgu->execute(array($title,$email));//Güncelleme komutlarımızı yazdık
                if ($guncelle)
                 {
                  ?>
<div class="alert alert-info" role="alert"><strong>Başarılı!</strong> Tüm değişiklikler uygulandı.</div>
                  <?php
                  //helper::alert("success","Tebrikler ! Kullanıcı güncellendi");
                 }
                 else {
                   //echo "Günceleme HATASI";
                   ?>
<div class="alert alert-danger mb-0" role="alert"><strong>Hay Aksi!</strong> Kaydetme sırasında istenmeyen bir sorun yaşandı.</div>
                   <?php
                 }


             }
       ?>
     <?php
       if(isset($_GET['delete_id']))
 {
   $stmt_select=$baglanti->db->prepare('SELECT * FROM footer_image WHERE id=:uid');
   $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
   $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
   unlink("upload/".$imgRow['picProfile']);
   $stmt_delete=$baglanti->db->prepare('DELETE FROM footer_image WHERE id =:uid');
   $stmt_delete->bindParam(':uid', $_GET['delete_id']);
   if($stmt_delete->execute())
   {
     ?>
     <script>
     alert("Görsel başarıyla silindi");
     window.location.href=('footer-ayar.php');
     </script>
     <?php
   }
   else

   ?>
     <script>
     alert("Can not delete item");
     window.location.href=('footer-ayar.php');
     </script>
     <?php

 }

 ?>
<!-- end delete script -->
<?php

 if(isset($_POST['btn-add']))
 {
   $name=$_POST['user_name'];

   $images=$_FILES['profile']['name'];
   $tmp_dir=$_FILES['profile']['tmp_name'];
   $imageSize=$_FILES['profile']['size'];

   $upload_dir='upload/';
   $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
   $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
   $picProfile=rand(1000, 1000000).".".$imgExt;
   move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
   $stmt=$baglanti->db->prepare('INSERT INTO footer_image(username, picProfile) VALUES (:uname, :upic)');
   $stmt->bindParam(':uname', $name);
   $stmt->bindParam(':upic', $picProfile);
   if($stmt->execute())
   {
     ?>
     <script>
       alert("Yeni görsel yüklendi");
       window.location.href=('footer-ayar.php');
     </script>
   <?php
   }else

   {
     ?>
     <script>
       alert("Error");
       window.location.href=('footer-ayar.php');
     </script>
   <?php
   }

 }
?>

<!-- form insert -->
 <div class="container">
   <div class="add-form">
     <h1 class="text-center">Footer Görselleri</h1>
     <form method="post" enctype="multipart/form-data">
       <label>User Name</label>
       <input type="text" name="user_name" class="form-control" required="">
       <label>Görsel Seç</label>
       <input type="file" name="profile" class="form-control" required="" accept="*/image">
       <br>
      <center>
<button class="btn btn-info" type="submit"  name="btn-add" title="click for edit">Yeni Ekle</button>
      </center>

     </form>
   </div>
   <hr style="border-top: 2px red solid;">
 </div>
<!-- end form insert -->
<!-- view form -->
<?php

     $stmt=$baglanti->db->prepare("SELECT * FROM footer_image");
       $stmt->execute();
       if($stmt->rowCount()>0)
       {
         while($row2=$stmt->fetch(PDO::FETCH_ASSOC))
         {
           extract($row2);
           ?>
    <img src="upload/<?php echo $row2['picProfile'];?>">
     <a class="btn btn-info" href="edit_form.php?edit_id=<?php echo $row2['id']?>" title="Düzenlemek için tıkla" onlick="return confirm('Sure to edit this record')"><span class="glyphicon glyphicone-edit"></span>Düzenle</a>
     <a class="btn btn-danger" href="?delete_id=<?php echo $row2['id']?>" title="Silmek için tıkla" onclick="return confirm('Görseli silmek istediğine emin misin?')">Sil</a>




<?php
       }
       }


 ?>
 <br><br>
                  <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Footer Tanıtım</label>
                    <div class="col-sm-10"><input  type="text" name="title" class="form-control" value="<?php  echo $footeryaz["aciklama"] ?>" id="example-text-input"></div>
                  </div>



                  <div class="button-items"><button type="submit" id="kaydet" name="kaydet" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Kaydet</button> </div>

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
