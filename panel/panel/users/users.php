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
                    <h1>Kullanıcılar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Kullanıcılar</li>
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
                            <h3 class="card-title">Kullanıcılar </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <th>Soyadı</th>
                                        <th>Email</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $user = $config->db->prepare("SELECT * from user 
                                    ORDER BY id DESC");
                                    $user->execute(array());
                                    $userCek = $user->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($userCek as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $row['k_adi'] ?></td>
                                            <td> <?= $row['surname'] ?></td>
                                            <td> <?= $row['email'] ?></td>
                                            <td><a href="pages-edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="settings/pages-settings.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sayfa Adı</th>
                                        <th>Aktif/Pasif</th>

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