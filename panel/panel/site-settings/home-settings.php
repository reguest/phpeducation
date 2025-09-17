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
                    <h1 class="m-0 text-dark">Anasayfa Ayarları</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Anasayfa Ayarları</li>
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
                                echo "Anasayfa Ayarları";
                            }  ?> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="settings/home-settings.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Görünen Kategori 1 </label>
                                            <select name="categoryOne" class="form-control">                                 
                                    <?php
                                    $categorie = $config->db->prepare("SELECT * from categories 
                                    ORDER BY id DESC");
                                    $categorie->execute(array());
                                    $categorieAll = $categorie->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($categorieAll as $row) {
                                    ?>
                                        <option <?php if($infoAll['categoryOne']==$row['id']){ echo "Selected"; } ?> value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                       
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Görünen Kategori 2</label>
                                           
                                            <select name="categoryTwo" class="form-control">                                 
                                    <?php
                                    $categorie = $config->db->prepare("SELECT * from categories 
                                    ORDER BY id DESC");
                                    $categorie->execute(array());
                                    $categorieAll = $categorie->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($categorieAll as $row) {
                                    ?>
                                        <option <?php if($infoAll['categoryTwo']==$row['id']){ echo "Selected"; } ?>   value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- <div class="row">
                                    <div class="col-sm-6">
                                  

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Site Anahtar Kelime</label>
                                            <input type="text" class="form-control" name="keyword" id="exampleInputEmail1" value="<?= $infoAll['keyword'] ?>" placeholder="Site Anahtar Kelime">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= $infoAll['email'] ?>" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                   

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Adres</label>
                                            <input type="text" class="form-control" name="adress" id="exampleInputEmail1" value="<?= $infoAll['adress'] ?>" placeholder="Adres">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Telefon</label>
                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value="<?= $infoAll['phone'] ?>" placeholder="Telefon">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                             

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Şirket Email</label>
                                            <input type="text" class="form-control" name="office_email" id="exampleInputEmail1" value="<?= $infoAll['office_email'] ?>" placeholder="Şirket Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Şirket Hattı</label>
                                            <input type="text" class="form-control" name="office_phone" id="exampleInputEmail1" value="<?= $infoAll['office_phone'] ?>" placeholder="Şirket Hattı">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                            

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Çalışma Saatleri</label>
                                            <input type="text" class="form-control" name="workhours" id="exampleInputEmail1" value="<?= $infoAll['workhours'] ?>" placeholder="Çalışma Saatleri">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Url </label>
                                            <input type="text" class="form-control" name="url" id="exampleInputEmail1" value="<?= $infoAll['url'] ?>" placeholder="Url">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                              
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hakkımızda </label>
                                            <input type="text" class="form-control" name="about" id="exampleInputEmail1" value="<?= $infoAll['about'] ?>" placeholder="Çalışma Saatleri">
                                        </div>
                                    </div>
                                  
                                </div> -->



                                <div class="card-footer">
                                    <button style="width: 100%;" type="submit" name="update_home_setting" class="btn btn-primary ">Kaydet</button>
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