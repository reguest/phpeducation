<?php include "template/header.php"; ?>


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
                                                        echo "Logo Ayarları";
                                                    }  ?> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="settings/sponsor.php" enctype="multipart/form-data">


                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                           
                                            <label for="exampleInputEmail1">Sponsor</label>
                                          
                                            <input type="file" name="image[]" id="image[]" multiple="multiple" class="form-control" />
                                       
                                        </div>
                                    </div>                                  
                                </div>


                                <div class="card-footer">
                                    <button style="width: 100%;" type="submit" name="sponsor_add" class="btn btn-primary ">Ekle</button>
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