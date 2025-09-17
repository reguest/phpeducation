<?php include "template/header.php"; ?>
<?php
$info = $config->db->prepare("SELECT * from settings where id=?");
$info->execute(array(1));
$infoAll = $info->fetch();
?>
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Panel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Panel</li>
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
                                                        echo "Sosyal Medya Ayarları";
                                                    }  ?> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="settings/social-settings.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Facebook</label>
                                            <input type="text" class="form-control" name="facebook" value="<?= $infoAll['facebook'] ?>" id="exampleInputEmail1" placeholder="Facebook">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input type="text" class="form-control" name="instagram" value="<?= $infoAll['instagram'] ?>" id="exampleInputEmail1" placeholder="Instagram">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Youtube</label>
                                            <input type="text" class="form-control" name="youtube" id="exampleInputEmail1" value="<?= $infoAll['youtube'] ?>" placeholder="Youtube">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tiktok</label>
                                            <input type="text" class="form-control" name="tiktok" id="exampleInputEmail1" value="<?= $infoAll['tiktok'] ?>" placeholder="Tiktok">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" id="exampleInputEmail1" value="<?= $infoAll['linkedin'] ?>" placeholder="Linkedin">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Twitter</label>
                                            <input type="text" class="form-control" name="twitter" id="exampleInputEmail1" value="<?= $infoAll['twitter'] ?>" placeholder="Twitter">
                                        </div>
                                    </div>
                                </div>

                              

                                <div class="card-footer">
                                    <button style="width: 100%;" type="submit" name="update_social_setting" class="btn btn-primary ">Kaydet</button>
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