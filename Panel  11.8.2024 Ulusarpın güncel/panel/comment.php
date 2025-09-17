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
                    <h1>Yorumlar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Yorumlar</li>
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
                            <h3 class="card-title">Yorum   </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Yorum</th>
                                        <th>Ürün</th>
                                        <th>Kullanıcı</th>
                                        <th>Onay</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $comment = $config->db->prepare("SELECT * from comments 
                                    ORDER BY id DESC");
                                    $comment->execute(array());
                                    $commentAll = $comment->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($commentAll as $row) {
                                    ?>


                                        <tr>
                                            <td> <a style="color:black;" href="comment-edit.php?id=<?= $row['id'] ?>" ><?= $row['description'] ?></a></td>
                                            <td> <?= $row['product_id'] ?></td>
                                            <td> <?= $row['user_id'] ?></td>
                                            <td> <?php if($row['status']==0){ ?><a href="settings/comment-settings.php?status=ok&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Onayla</a> <?php ;} else { ?><a href="settings/comment-settings.php?status=no&id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Yayından Kaldır</a> <?php  ;} ?></td>
                                            <td><a href="comment-edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="settings/comment-settings.php?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                  
                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>Yorum</th>
                                        <th>Ürün</th>
                                        <th>Kullanıcı</th>
                                        <th>Onay</th>
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