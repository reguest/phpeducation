<?php include "template/header.php"; ?>

<?php
$info = $config->db->prepare("SELECT * from banners");
$info->execute(array());
$infoAll = $info->fetchAll(); // tüm tabloyu çeker
//print_r( $infoAll );
//echo "";



?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Banner</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Banner</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->

                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card  <?php if (isset($_GET['status'])) {
                                            if ($_GET['status'] == "ok") {
                                                echo "card-success";
                                            } else {
                                                echo "card-danger";
                                            }
                                        } else {
                                            echo "card-primary";
                                        }  ?>">
                        <div class="card-header">
                            <h3 class="card-title"> <?php if (isset($_GET['status'])) {
                                                        if ($_GET['status'] == "ok") {
                                                            echo "Kaydedildi";
                                                        } else {
                                                            echo "Hata";
                                                        }
                                                    } else {
                                                        echo "Banner Ayarları";
                                                    }  ?> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="settings/banner-settings.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <img width="100px" src="../images/banner/<?= $infoAll[0]['image']; ?>" alt=""> </br>
                                            <label for="exampleInputEmail1">Banner 1 </label>
                                            <input type="file" class="form-control" name="banner1" id="exampleInputEmail1" placeholder="Resim">
                                            <label for="exampleInputEmail1">Başlık </label> <br>
                                            <input type="text" class="form-control" value="<?= $infoAll[0]['title']; ?>" name="title" id="exampleInputEmail1" placeholder="Başlık">
                                            <label for="exampleInputEmail1">Açıklama </label>
                                            <input type="text" class="form-control" value="<?= $infoAll[0]['description']; ?>" name="description" id="exampleInputEmail1" placeholder="Açıklama">
                                            <label for="exampleInputEmail1">Buton Adı </label>
                                            <input type="text" class="form-control" value="<?= $infoAll[0]['button_name']; ?>" name="button_name" id="exampleInputEmail1" placeholder="Buton Adı">
                                            <label for="exampleInputEmail1">Url</label>
                                            <input type="text" class="form-control" value="<?= $infoAll[0]['url']; ?>" name="url" id="exampleInputEmail1" placeholder="Url">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <img width="100px" src="../images/banner/<?= $infoAll[1]['image']; ?>" alt=""> </br>
                                            <label for="exampleInputEmail1">Banner 2</label>
                                            <input type="file" class="form-control" name="banner2" id="exampleInputEmail1" placeholder="Banner">
                                            <label for="exampleInputEmail1">Url </label>
                                            <input type="text" class="form-control" value="<?= $infoAll[1]['url']; ?>" name="url2" id="exampleInputEmail1" placeholder="Url">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <img width="100px" src="../images/banner/<?= $infoAll[2]['image']; ?>" alt=""> </br>
                                            <label for="exampleInputEmail1">Banner 3</label>
                                            <input type="file" class="form-control" name="banner3" id="exampleInputEmail1" placeholder="Banner">
                                            <label for="exampleInputEmail1">Url </label>
                                            <input type="text" class="form-control" value="<?= $infoAll[3]['url']; ?>" name="url3" id="exampleInputEmail1" placeholder="Url">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <img width="100px" src="../images/banner/<?= $infoAll[3]['image']; ?>" alt=""> </br>
                                            <label for="exampleInputEmail1">Banner 4</label>
                                            <input type="file" class="form-control" name="banner4" id="exampleInputEmail1" placeholder="Banner">
                                            <label for="exampleInputEmail1">Url </label>
                                            <input type="text" class="form-control" value="<?= $infoAll[3]['url']; ?>" name="url4" id="exampleInputEmail1" placeholder="Url">

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <img width="100px" src="../images/banner/<?= $infoAll[4]['image']; ?>" alt=""> </br>
                                            <label for="exampleInputEmail1">Footer</label>
                                            <input type="file" class="form-control" name="iyzico" id="exampleInputEmail1" placeholder="Banner">


                                        </div>
                                    </div>
                                   
                                </div>




                                <div class="card-footer">
                                    <button style="width: 100%;" type="submit" name="update_banner" class="btn btn-primary ">Kaydet</button>
                                </div>



                                <!-- input states -->
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- general form elements disabled -->

                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>



</div>
<!-- /.content-wrapper -->

<?php include "template/footer.php"; ?>