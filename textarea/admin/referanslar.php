<!DOCTYPE html>
<?php include "config.php"; ?>
<?php sessionmanager::oturumkontrol2();?>
<?php //print_r($_SESSION); ?>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Referanslar - İncecode Aksaray</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  </head>
  <body class="light-sidebar-nav">
  <section id="container">
      <!--header start-->
    <?php include "template/header.php"; ?>
      <!--header end-->
      <!--sidebar start-->
    <?php include "template/left.php"; ?>
      <!--sidebar end-->
      <!--main content start-->


      <!-- Right Slidebar start -->

      <!-- Right Slidebar end -->
<style media="screen">
#main-content {
  margin-left: 210px;
  padding-bottom: 0px;
}
</style>

      <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="card">

                                <table class="table table-striped table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> Görsel</th>



                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $stmt=$baglanti->db->prepare('SELECT * FROM referanslar');
                                                      $stmt->execute();
                                                      if($stmt->rowCount()>0)
                                                      {
                                                        while($referans=$stmt->fetch(PDO::FETCH_ASSOC))
                                                        {
                                                          extract($referans); ?>
                                    <tr>
                                        <td><a href="#"><img  width="150px" src="../assets\images\referanslar/<?= $referans['referans_image'] ?>" alt=""> </a></td>



                                      <td>

                                            <a href="referans-duzenle.php?id=<?= $referans['referans_id'] ?>" class=" btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a href="referans-sil.php?id=<?= $referans['referans_id'] ?>" class="btn-danger btn-sm"><i class="fa fa-trash-o "></i></a>
                                        </td>
                                    </tr>

                                    <?php
                                      }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>
                    <!-- page end-->
                </section>
            </section>


      <!--footer start-->
        <?php include "template/footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>
  <script>
      //owl carousel
      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });
  </script>

  </body>
</html>
