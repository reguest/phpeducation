<!DOCTYPE html>
<?php include "config.php"; ?>
<?php sessionmanager::oturumkontrol2();?>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon-2.html">

    <title>Galeri</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/gallery.css" />
    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


  </head>

  <body class="light-sidebar-nav">

  <section id="container" class="">
      <!--header start-->
        <?php include "template/header.php"; ?>
      <!--header end-->
      <!--sidebar start-->
        <?php include "template/left.php"; ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <section class="card">
                  <header class="card-header">
                      Galeri
                  </header>
                  <div class="card-body">
                      <ul class="grid cs-style-3">

                        <form method="POST" enctype="multipart/form-data">
                          <?php //ÇOKLU GÖRSEL YÜKLEME İŞLEMİ




                          //eklenen resmin kategorisini önceden çektik

                          function GetNextImageIndex(){
                            global $baglanti;
                            $imageIndex = 0;
                            $stmt = $baglanti->db->prepare("SELECT * FROM indextable WHERE id=?");
                            $stmt->execute([0]);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            if($row)
                            {
                            $imageIndex = intval($row['imageIndex']) + 1;
                            $sql = "UPDATE indextable SET imageIndex = ? WHERE id = ?;";
                            $stmt= $baglanti->db->prepare($sql);
                            $stmt->execute([$imageIndex, 0]);
                            }
                            return $imageIndex;
                          }
                          function InsertNewImage($name){
                            global $baglanti;
                            $sql = "INSERT INTO galeri (resim_adi) VALUES (?);";
                            $stmt= $baglanti->db->prepare($sql);
                            $stmt->execute([$name]);
                          }

                          if (isset($_POST['upload'])) {
                            //----------
                            $klasor="../wp-content/uploads/galeri";
                            $dosya_isim_sayi=count($_FILES['dosya']['name']);
                            if($dosya_isim_sayi > 0){
                              for($i=0;$i<$dosya_isim_sayi;$i++){
                                if(!empty($_FILES['dosya']['name'][$i])){
                                  $imageIndex = GetNextImageIndex();

                                  //$imageName = $imageIndex.".".end(explode(".", $_FILES['dosya']['name'][$i]));
                                  $extension= explode(".", $_FILES['dosya']['name'][$i]);
                                  $imageName = $imageIndex.".".end($extension);

                                  //echo $imageName;

                                  move_uploaded_file($_FILES['dosya']['tmp_name'][$i],$klasor."/".$imageName);

                                  echo "<br>";
                                  $url = $_FILES['dosya']['name'][$i];
                                  $name = $_FILES['dosya']['name'][$i];
                                  $alt = "Resim açıklaması";
                                  InsertNewImage($imageName);
                                //	$uploadimage = $baglanti->db->prepare("INSERT INTO picture (picture_name, picture_category) VALUES (?,?)) ");
                                //	$eklendi=$uploadimage->execute(array($picturename, $uruncategory));
                                }
                              }
                            }else{
                              echo "hiç resim göndermediniz.";
                            }

                          }
                          //ÇOKLU GÖRSEL YÜKLEME İŞLEMİ

                           ?>
                      <label> Birden fazla görsel YÜKLE!</label>
                      <input type="file" name="dosya[]" id="dosya[]" multiple="multiple"/>
                         <input type="submit" name="upload" value="YÜKLE"/>
                         </form>

<?php


$stmt=$baglanti->db->prepare('SELECT * FROM galeri ');
                $stmt->execute();
                if($stmt->rowCount()>0)
                {
                  while($galeri=$stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    extract($galeri); ?>

                          <li>
                              <figure>
                                  <img src="../wp-content/uploads/galeri/<?= $galeri['resim_adi'] ?>" alt="img04">
                                  <figcaption>


                                      <a class="fancybox" rel="group" href="galeri_sil.php?id=<?= $galeri['resim_id']  ?>">Sil</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <?php
                            }
                          }
                          ?>
                      </ul>

                  </div>
              </section>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/chat-avatar2.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/chat-avatar.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/pro-ac-1.png" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge badge-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/avatar1.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="">
                          <img alt="" src="img/mail-avatar.jpg" class="mr-3 rounded-circle">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-striped bg-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped bg-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-striped bg-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-striped bg-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-striped">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

      <!--footer start-->
<?php include "template/footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/fancybox/source/jquery.fancybox.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>

    <script src="js/modernizr.custom.js"></script>
    <script src="js/toucheffects.js"></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  </body>
</html>
