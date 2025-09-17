<!DOCTYPE html>
<?php  $id=intval($_GET['id']); ?>
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
<title>Referans Düzenle - İncecode Aksaray</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-reset.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/colorpicker/css/bootstrap-colorpicker.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />
  <!--bootstrap switcher-->
<link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />
  <!-- switchery-->
  <link rel="stylesheet" type="text/css" href="assets/switchery/switchery.css" />
  <!--select 2-->
  <link rel="stylesheet" type="text/css" href="assets/select2/css/select2.min.css" />
  <!--right slidebar-->
  <link href="css/slidebars.css" rel="stylesheet">
  <!--  summernote -->
  <link href="assets/summernote/summernote-bs4.css" rel="stylesheet">
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
        <!--Summernote start-->
        <div class="row">
          <div class="col-md-12">
            <section class="card">
              <header class="card-header">
                Referans Düzenleme Sayfası
                <span class="tools pull-right">
                  <a href="javascript:;" class="fa fa-chevron-down"></a>
                  <a href="javascript:;" class="fa fa-times"></a>
                </span>
              </header>
              <div class="card-body">
                <form class="picker-form" enctype="multipart/form-data" method="POST" >
                  <?php

if (isset($_POST['kaydet'])) {

$sorgu=$baglanti->db->prepare("UPDATE hizmetler set
  referans_image=:referans_image,

  where referans_id=:referans_id");//Güncelleme komutlarımızı yazdık
$guncelle= $sorgu->execute(array(
  ":referans_image" =>$referans_image,


  ":referans_id" =>$id));//Güncelleme komutlarımızı yazdık
if ($guncelle) {
  //echo "Tur Güncellendi";
  ?>

  <div class="alert alert-success" role="alert">
                                  Referans Güncellendi!
                              </div>

                              <?php
}else {
//  echo "Bir hata oluştu!";
?>

<div class="alert alert-danger" role="alert">
                                  Hata Oluştu!
                              </div>
<?php
}

}

else {
//echo "hata";
}
                   ?>

                  
                  <div class="form-group row last">
                    <label class="control-label col-md-3">Görsel Seç</label>
                    <div class="col-md-9">
                      <?php

                      //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
                      if (isset($_POST['resimupload'])) {

                        $sonsayi2=$baglanti->db->prepare("select * from indextable where id=?");
                        $sonsayi2->execute(array("0"));
                        $islem2=$sonsayi2->fetch();
                        $sonsayi2=$islem2['imageIndex'];
                        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
                        $nextindex=$sonsayi2+1;
                        $dizin ="../assets/images/referanslar/";
                        $rnd=rand(1,10000);
                        $rnd2=rand(100000,900000);
                        $tpl=$rnd+$rnd2;
                        $yuklenecekresim = $dizin.$tpl.$nextindex.".png";

                        if (move_uploaded_file($_FILES["yukle"]["tmp_name"],$yuklenecekresim)) {
                          //echo "Resminiz başarıyle yüklendi";
                        $gorsel= $tpl.$nextindex.".png";
                        //yeni resmi vt ye ekliyoruz
                        $sorgu2=$baglanti->db->prepare("UPDATE referanslar set referans_image=? where referans_id=?");//Güncelleme komutlarımızı yazdık
                        $guncelle2=$sorgu2->execute(array($gorsel,$id));//SON SAYIMIZI GİRDİK (GÜNCELLEDİK)
                       //yeni resmi vt ye ekliyoruz


                        //next index değerini bir arttırıyoruz
                        $sorgu=$baglanti->db->prepare("UPDATE indextable set imageIndex=? where id=0 ");//Güncelleme komutlarımızı yazdık
                        $guncelle=$sorgu->execute(array($nextindex));//SON SAYIMIZI GİRDİK (GÜNCELLEDİK)
                        //next index değerini bir arttırıyoruz
                        }



                      }

                       ?>


                            <input type="file" name="yukle" class="default" />



                          <button href="#" type="submit" class="btn btn-danger fileupload-exists" name="resimupload" data-dismiss="fileupload"><i class="fa fa-trash"></i> Yükle</button>



                    </div>
                  </div>























<style >
.pro-img-list {
  margin: 10px 0 0 -15px;
   width: auto;/
  display: inline-block;
}
</style>




                  <div class="col-lg-12">

                    <button class="btn btn-danger" name="kaydet" style="width:100%" type="submit">Kaydet</button>


                  </div>
                </form>

                <br>



              </div>
            </section>
          </div>
        </div>
        <!--Summernote end-->



        <!-- page end-->
      </section>
    </section>
    <!--main content end-->


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
  <script src="js/respond.min.js"></script>

  <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--select2-->
  <script type="text/javascript" src="assets/select2/js/select2.min.js"></script>

  <!--summernote-->
  <script src="assets/summernote/summernote-bs4.min.js"></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>


  <!--multiselect start + spinner + wysihtml5 scripts-->
  <script src="js/advanced-form-components.js"></script>
  <!--pickers script-->
  <script src="js/pickers/init-date-picker.js"></script>
  <script src="js/pickers/init-datetime-picker.js"></script>
  <script src="js/pickers/init-color-picker.js"></script>

  <!--bootstrap-switch-->
  <script src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>

  <!--bootstrap-switch-->
  <script src="assets/switchery/switchery.js"></script>

  <!--common script for all pages-->
  <script src="js/common-scripts.js"></script>

  <script>
    jQuery(document).ready(function() {

      $('.summernote').summernote({
        height: 200, // set editor height

        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor

        focus: true // set focus to editable area after initializing summernote
      });
    });
  </script>

  <!--select2-->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".js-example-basic-single").select2();

      $(".js-example-basic-multiple").select2();
    });
  </script>

  <!--bootstrap swither-->
  <script type="text/javascript">
    $(document).ready(function() {
      // Resets to the regular style
      $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
      // Sets a mini switch
      $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
      // Sets a small switch
      $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
      // Sets a large switch
      $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


      $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
      $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
    });
  </script>

  <!-- swithery-->
  <script type="text/javascript">
    $(document).ready(function() {
      //default
      var elem = document.querySelector('.js-switch');
      var init = new Switchery(elem);


      //small
      var elem = document.querySelector('.js-switch-small');
      var switchery = new Switchery(elem, {
        size: 'small'
      });

      //large
      var elem = document.querySelector('.js-switch-large');
      var switchery = new Switchery(elem, {
        size: 'large'
      });


      //blue color
      var elem = document.querySelector('.js-switch-blue');
      var switchery = new Switchery(elem, {
        color: '#7c8bc7',
        jackColor: '#9decff'
      });

      //green color
      var elem = document.querySelector('.js-switch-yellow');
      var switchery = new Switchery(elem, {
        color: '#FFA400',
        jackColor: '#ffffff'
      });

      //red color
      var elem = document.querySelector('.js-switch-red');
      var switchery = new Switchery(elem, {
        color: '#ff6c60',
        jackColor: '#ffffff'
      });


    });
  </script>


</body>


</html>
