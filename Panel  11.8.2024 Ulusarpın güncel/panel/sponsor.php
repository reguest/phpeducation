<?php include "template/header.php"; ?>
<?php
$info = $config->db->prepare("SELECT * from settings where id=?");
$info->execute(array(1));
$infoAll = $info->fetch();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sponsorlar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Sponsorlar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sponsor Ekle <a href="sponsor-add.php">+</a> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Görsel</th>
                                     
                                        <th>İşlem</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $sponsor = $config->db->prepare("SELECT * from sponsor ");
                                    $sponsor->execute(array());
                                    $sponsorAll = $sponsor->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($sponsorAll as $row) {
                                    ?>
                                        <tr>
                                            <td> <a href="#"> <img width="80px" src="../images/sponsor/<?= $row['imageName'] ?>" alt=""></a> </td>
                                         

                                            <td>
    
                                                <a href="settings/sponsor.php?id=<?= $row['id'] ?>&image=<?= $row['imageName'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>


                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Görsel</th>
                                     
                                        <th>İşlem</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "template/footer.php"; ?>